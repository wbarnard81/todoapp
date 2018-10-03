<?php

namespace App\Http\Controllers;

use App\Task;

class ToDoController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }

    public function edit()
    {
        return view('edit');
    }
}
