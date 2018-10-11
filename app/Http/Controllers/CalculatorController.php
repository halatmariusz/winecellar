<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    private $defaultSugar = 17; // value of sugar in grams to get 1 liter of 1 percent alcohol

    public function sugarForm()
    {
        return view('pages.calculator.sugar');
    }

    public function sugarFormPost(Request $request)
    {
        $volume = $request->input('volume');
        $power = $request->input('power');

        $sugarG = $volume * $power * $this->defaultSugar;
        $sugarKg = $sugarG / 1000;

        $values = ['sugarG' => $sugarG, 'sugarKg' => $sugarKg];

        return view('pages.calculator.sugar', $values);
    }
}
