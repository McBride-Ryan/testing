<?php

namespace App\Models;

use App\Http\Traits\AnimalTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    use AnimalTrait;

}
