<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    
    public function TaskController()
    {
        $tasks = Task::all();

        return view('tasks.login', compact('tasks'));
    }


}