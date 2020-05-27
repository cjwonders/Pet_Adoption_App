<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ControllerForCats extends Controller
{
    public function ViewForCat () {
        $cats = DB::table('Pets')->where('pet_type', 'cat')->get();

        return view('cats', ['cats' => $cats]);
    }
}
