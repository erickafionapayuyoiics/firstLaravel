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

    public function show(Task $task)
    {

        return view('update', compact('task'));
    }

    public function insert( Request $request){
        

        $task = Task::create(['title' => $request->title, 'description' => $request->description , 'user_id' => $request->userid ]);

        return redirect()->route('index');
    }

    public function update(Task $task, Request $r){

        $task->update(['title' => $r->title, 'description' => $r->desc ]);


        return redirect()->route('index');
    }

    public function delete(Task $task){

        $task->delete();
        $tasks = Task::all();

        return view('index', compact('tasks'));
    }

}
