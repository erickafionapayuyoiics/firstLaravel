<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    public function string(){
        return 'Hello World!';
    }

    public function getEmail(Request $request){
        return $request->email;
    }

    //Declare variables
    public function getData(){
        $names = array("Fiona", "Kevin", "Pam");
        $occupations = array("Developer", "Accountant", "Architect");
        return view('success', compact("names", "occupations"));

    }
}
