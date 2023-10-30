<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{

    public function showTrains()
    {
        $treniInPartenza = Train::whereDate('orario_partenza', '>=', now())->orderBy('orario_partenza', 'asc')->get();
        $treniInArrivo = Train::whereDate('orario_arrivo', '>=', now())->orderBy('orario_arrivo', 'asc')->get();

        return view('home', compact('treniInPartenza', 'treniInArrivo'));
    }
}
