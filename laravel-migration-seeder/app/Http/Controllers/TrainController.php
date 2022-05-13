<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainController extends Controller
{
    public function index(){

        $trains = DB::table('trains')
                ->orderBy('orario_di_partenza', 'desc')
                ->get();

        $data = [
            "train" => new Train(),
            "trains" => $trains
        ];

        return view('trains.index', $data);
    }
}
