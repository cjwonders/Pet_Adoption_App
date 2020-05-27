<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AddPet extends Controller
{
    public function show () {

        if (isset($pet_name)) {
            var_dump($pet_name);
        } else {
            var_dump('Submit the form bro');
        }

        return view('AddPet');
    }

    public function add (Request $request) {

        if ($request->isMethod('post')) {
            $pet_name = $request->input('pet_name');
            $pet_image = $request->input('pet_image');
            $pet_type = $request->input('pet_type');
            $data=array('name'=>$pet_name,"image"=>$pet_image,"pet_type"=>$pet_type);
            DB::table('Pets')->insert($data);
            echo "Record inserted successfully.<br/>";
            echo '<a href = "/addpet">Click Here</a> to add another pet.';
        } else {
            echo "unsuccessful.<br/>";
            echo '<a href = "/">Click Here</a> to go the homepage.';
        }

    }
}
