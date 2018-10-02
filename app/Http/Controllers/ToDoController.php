<?php

namespace App\Http\Controllers;

class ToDoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function edit()
    {
        return view('edit');
    }
}
