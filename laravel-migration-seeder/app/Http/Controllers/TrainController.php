<?php

namespace App\Http\Controllers;
use App\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TrainController extends Controller
{
    public function index(){

        $trains = Train::orderBy('orario_di_partenza', 'desc')->paginate(12);

        return view('trains.index', ["trains" => $trains]);
    }

    public function show($id){
        $train = Train::findOrFail($id);
        return view('trains.show', ['train'=>$train] );
    }
}


