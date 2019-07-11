<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Calendar;
use App\Wine;
use App\WineData;

class CalendarController extends Controller
{
    private $colors = [
        1 => '#dda0dd',
        2 => '#6f2da8',
        3 => '#fa3b29',
        4 => '#dc212a'
    ];

    private $actions = [
        'add' => 'Nastawiono',
        'acid' => 'Dodano kwasek cytrynowy',
        'drain' => 'Odcedzono owoce',
        'sediment' => 'Zlano znad osadu',
        'sugar' => 'Dodano cukru',
        'water' => 'Dodano wody'
    ];

    public function showCalendar()
    {
        $wines = Wine::select('id', 'title', 'added_on')
                        ->whereUserId(Auth::user()->id)
                        ->orderBy('added_on')
                        ->get();

        $data = WineData::select('wine_id', 'data_key', 'added_on')
                        ->whereUserId(Auth::user()->id)
                        ->orderBy('added_on')
                        ->distinct()
                        ->with('wine')
                        ->get();

        $grouped = $data->groupBy('added_on');

        $events = [];

        // create wines
        foreach ($wines as $key => $value) {
            $events[] = Calendar::event(
                $this->actions['add'] . ' / ' . $value->title,
                true,
                $value->added_on,
                $value->added_on,
                $value->id,
                [
                    'color' => $this->colors[$value->id],
                    'url' => '/wines/show/' . $value->id
                ]
            );
        }

        // wines data
        foreach ($grouped as $key => $value) {
            foreach ($value as $key2 => $item) {
                $events[] = Calendar::event(
                    $this->actions[$item->data_key] . ' / ' . $item->wine->title,
                    true,
                    $item->added_on,
                    $item->added_on,
                    $item->wine_id,
                    [
                        'color' => $this->colors[$item->wine_id],
                        'url' => '/wines/show/' . $item->wine_id
                    ]
                );
            }
        }

        $calendar = Calendar::addEvents($events);

        return view('pages.calendar.full', compact('calendar'));
    }
}
