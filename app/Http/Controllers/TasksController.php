<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::getAll();
        return view('tasks.index', compact('tasks'));
    }

    public function complete()
    {
        $query = Task::getAll();
        $tasks = Task::Complete($query);

        return view('tasks.complete', compact('tasks'));
    }

    public function show(Task $task)
    {
        //$task = Task::findOne($id);
        return view('tasks.show', compact('task'));
    }
}
