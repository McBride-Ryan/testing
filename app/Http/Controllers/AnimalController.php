<?php

namespace App\Http\Controllers;
use App\Http\Traits\FlightTrait;
use App\Models\Aerial;
use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Traits\AnimalTrait;

class AnimalController extends Controller
{
//    use AnimalTrait;
    public function index(){
        $animal = Animal::all();
        $aerial = new Aerial();
        $eyes = new Animal();
        return view('welcome', [
            'aerial' => $aerial,
            'eyes' => $eyes,
        ])->with(compact('animal'));
    }

////    public function flight(){
////        $aerial = new Aerial();
////
////        return view('welcome', [
////            'aerial' => $aerial,
////        ]);
//    }
}
