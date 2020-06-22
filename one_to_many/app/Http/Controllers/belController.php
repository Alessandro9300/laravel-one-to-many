<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Tasks;
use Illuminate\Http\Request;

class belController extends Controller
{
  public function index(){
    $tasks = Tasks::all();

    return view('home', compact('tasks'));
  }

  public function show($id){

    $employee = Tasks::findOrFail($id);

    return view('employee', compact('employee'));

  }

  public function showTask($id){
    $task = Tasks::findOrFail($id);

    return view('showTask', compact('task'));
  }

  public function update($id){
    $task = Tasks::findOrFail($id);
    $employees = Employee::all();
    return view('update', compact('task', 'employees'));
  }

  public function updateStore(request $request, $id){

    // dd($request);

    $validation = $request -> validate([
      'name' => 'required',
      'description' => 'required',
      'scadenza' => 'required',
      'employee_id' => 'required'
    ]);

    Tasks::whereId($id) -> update($validation);

    return redirect() -> route('home');

  }
}
