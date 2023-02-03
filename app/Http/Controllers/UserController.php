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

    /*public function validate(User $user, Request $request)
    {
        //Validate whether user is already signed up or not
        /*$user = User::all()->where('name', $request->name);
        if($user===null)
        {
            return redirect()->route('insert');
        }
        else
        {
            return redirect()->route('index', compact('user'));
        }

    }*/

    public function search(Request $r)
    {
        $user = User::find(1);
        //$tasks = User::find(1)->tasks;
        //$tasks = Task::whereBelongsTo($user)->get();

        //$tasks = Task::where('user_id', $user)->get();

        //$tasks = $user->tasks();

        return redirect()->route('index', compact('user'));
        
    }
    
}
