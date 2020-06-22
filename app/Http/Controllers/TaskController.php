<?php

namespace App\Http\Controllers;

use App\Task;
use App\Employee;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {

      $tasks = Task::all();
      return view('home', compact('tasks'));
    }


  public function show($id)
{
    $task = Task::findOrFail($id);
    return view('show', compact('task'));
}

public function edit($id)
{
    $task = Task::findOrFail($id);
    $employees = Employee::all();
    return view('edit', compact('task', 'employees'));
}

public function update(Request $request, $id)
{
    
    $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'deadline' => 'required',
        'employee_id' => 'required'
    ]);

    Task::whereId($id) -> update($validatedData);

    return redirect() -> route('home');
}


}