<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index () {
        $pets = DB::table('Pets')->get();

        $featured = DB::table('Pets')->first();

        return view('index', ['pets' => $pets, 'featured' => $featured]);
    }

    public function cats () {
        return view('cats');
    }

    public function dogs () {
        return view('dogs');
    }

}
