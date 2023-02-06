<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(User $user)
    {
        $tasks = $user->tasks;

        return view('index', compact('user', 'tasks')) ;
        
    }

    public function show(User $user, Task $task)
    {

        return view('update', compact('user','task'));
    }

    public function insert(User $user, Request $request){
        

        $task = Task::create(['title' => $request->title, 'description' => $request->description , 'user_id' => $user->id ]);

        return redirect()->route('index', compact('user'));
    }

    public function update(User $user, Task $task, Request $request){

        $task->update(['title' => $request->title, 'description' => $request->description ]);


        return redirect()->route('index', compact('user'));
    }

    public function delete(User $user, Task $task){

        $task->delete();

        return redirect()->route('index', compact('user'));
    }

}
