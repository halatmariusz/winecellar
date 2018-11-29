<?php

namespace App\Helpers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Requests;

class Helpers
{
    public static function wineDataTrans($data)
    {
        switch ($data) {
            case 'acid':
                $trans = 'Dodano kwasek cytrynowy';
                break;
            case 'drain':
                $trans = 'Odcedzono owoce od nastawu';
                break;
            case 'sediment':
                $trans = 'Zlano z nad osadu';
                break;
            case 'sugar':
                $trans = 'Dodano cukier';
                break;
            case 'water':
                $trans = 'Dodano wody';
                break;
        }

        return $trans;
    }
}
