<?php

use App\Test;

Route::get('/', function () {
    $title = 'ge zijt van';
    $users = [
        'enzo',
        'jan',
        'jorn'
    ];
    return view('welcome', compact('title', 'users'));
});

// tasks
/*
Route::get('tasks', function () {
    //$tasks = DB::table('tasks')->get();
    //$tasks = Task::all();
    $tasks = Task::getAll();

    return view('tasks.index', compact('tasks'));
});
*/
Route::get('tasks', 'TasksController@index');

/*
Route::get('tasks/complete', function () {
    $query = Task::getAll();
    $tasks = Task::Complete($query);

    return view('tasks.complete', compact('tasks'));
});
*/
Route::get('tasks/complete', 'TasksController@complete');

/*
Route::get('tasks/{id}', function ($id) {
    //$task = DB::table('tasks')->find($id);
    //$task = Task::find($id);
    $task = Task::findOne($id);
    return view('tasks.show', compact('task'));
});
*/
Route::get('tasks/{task}', 'TasksController@show');

// tests
Route::get('tests', function () {
    $tests = Test::getAll();
    return view('tests.index', compact('tests'));
});
Route::get('tests/{id}', function ($id) {
    $test = Test::findOne($id);
    return view('tests.show', compact('test'));
});
