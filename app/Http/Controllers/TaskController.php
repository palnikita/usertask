<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;


use Illuminate\Http\Request;
use App\Exports\TaskExport;
use Maatwebsite\Excel\Facades\Excel;


class TaskController extends Controller
{
    


    public function create()
{
    $users = User::all();
    return view('addtask', compact('users'));
}

public function tasks(Request $request)
{
    $task = Task::create($request->all());
    return redirect()->route('create')->with('success', 'Task added successfully');
}



public function tasklist()
{
    $tasks = Task::paginate(5);
   
    return view('taskuser', compact('tasks'));
}




}
