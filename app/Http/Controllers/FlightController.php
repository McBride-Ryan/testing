<?php

namespace App\Http\Controllers;

use App\Models\Aerial;
use App\Models\Animal;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function flight(){
        $aerial = new Aerial();

        return view('/animals', [
            'aerial' => $aerial,
        ]);
    }
}
