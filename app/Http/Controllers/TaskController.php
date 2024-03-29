<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks',['tasks' => Task::all()]);
    }

    public function create()
    {
        return view('tasks.create');
    }
}
