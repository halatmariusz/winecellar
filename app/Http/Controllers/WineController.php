<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Wine;

class WineController extends Controller
{
    public function showList()
    {
        $wines = Wine::where('bottled', '=', false)->orderBy('added_on', 'asc')->get();

        return view('pages.wine.list', compact('wines'));
    }
}
