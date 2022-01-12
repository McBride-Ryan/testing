<?php

namespace App\Models;

use App\Http\Traits\FlightTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aerial extends Animal
{
    use HasFactory;
    use FlightTrait;
}
