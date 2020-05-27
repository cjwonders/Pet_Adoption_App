<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SingleCat extends Controller
{
    public function cat ($id) {

        $cat = DB::table('Pets')->where('id', $id)->first();

        return view('SingleCat', ['cat' => $cat]);
    }
}
