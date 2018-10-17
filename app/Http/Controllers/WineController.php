<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Wine;
use App\WineData;

class WineController extends Controller
{
    public function showList()
    {
        $wines = Wine::where('bottled', '=', false)->orderBy('added_on', 'asc')->get();

        return view('pages.wine.list', compact('wines'));
    }

    public function setDrain($wine_id)
    {
        return view('pages.wine.drain', compact('wine_id'));
    }

    public function setDrainPost(Request $request, $wine_id)
    {
        $data_key = 'drain';

        $data = new WineData();
        $data->user_id = 1;
        $data->wine_id = $wine_id;
        $data->data_key = $data_key;
        $data->data_volume = $request->volume;
        $data->added_on = $request->added_on;
        $data->save();

        $wine = Wine::find($wine_id);
        $wine->is_drain = '1';
        $wine->save();

        return Redirect::route('wines.list')->with('success', 'Zapisano!');
    }

    public function setSediment()
    {

    }

    public function setSugar($wine_id)
    {
        return view('pages.wine.sugar', compact('wine_id'));
    }

    public function setSugarPost(Request $request, $wine_id)
    {
        $data_key = 'sugar';

        $data = new WineData();
        $data->user_id = 1;
        $data->wine_id = $wine_id;
        $data->data_key = $data_key;
        $data->data_volume = $request->volume;
        $data->added_on = $request->added_on;
        $data->save();

        return Redirect::route('wines.list')->with('success', 'Zapisano!');
    }

    public function setSugarWater($wine_id)
    {

    }

    public function setWater($wine_id)
    {
        return view('pages.wine.water', compact('wine_id'));
    }

    public function setWaterPost($wine_id)
    {
        $data_key = 'water';

        $data = new WineData();
        $data->user_id = 1;
        $data->wine_id = $wine_id;
        $data->data_key = $data_key;
        $data->data_volume = $request->volume;
        $data->added_on = $request->added_on;
        $data->save();

        return Redirect::route('wines.list')->with('success', 'Zapisano!');
    }
}
