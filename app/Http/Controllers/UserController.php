<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {

        return view('user');
    }

    public function search(Request $request)
    {
        //Validate whether user is already signed up or not
        $user = User::where('name', $request->name)->first();
        if($user===null)
        {
            $user = User::create(['name' => $request->name, ]);
            return redirect()->route('index', compact('user'));
        }
        else
        {
            return redirect()->route('index', compact('user'));
        }

    }
    
}
