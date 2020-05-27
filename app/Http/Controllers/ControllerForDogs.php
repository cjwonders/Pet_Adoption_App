<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ControllerForDogs extends Controller
{
    public function ViewForDog () {
        $dogs = DB::table('Pets')->where('pet_type', 'dog')->get();

        return view('dogs', ['dogs' => $dogs]);
    }
}
