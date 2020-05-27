<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SingleDog extends Controller
{
    public function dog ($id) {

        $dog = DB::table('Pets')->where('id', $id)->first();

        return view('SingleDog', ['dog' => $dog]);
    }
}
