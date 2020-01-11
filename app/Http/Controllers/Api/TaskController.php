<?php

namespace App\Http\Controllers\Api;

use App\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $tasks = Task::select(['id', 'category_id', 'title', 'description', 'pending'])->get();

    return response()->json($tasks);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->only(['category_id', 'title', 'description', 'pending']);

    $this->validate($request, [
      'category_id' => 'required|exists:categories,id',
      'title' => 'required|string',
      'description' => '',
      'pending' => 'in:0,1'
    ]);

    $task = Task::create($data);

    return response()->json([
      'success' => true,
      'task' => $task
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Task  $task
   * @return \Illuminate\Http\Response
   */
  public function show(Task $task)
  {
    return response()->json([
      'success' => true,
      'task' => $task
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Task  $task
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Task $task)
  {
    $this->validate($request, [
      'category_id' => 'required|exists:categories,id',
      'title' => 'required|string',
      'description' => '',
      'pending' => 'in:0,1'
    ]);

    $task->fill($request->all());
    $task->save();

    return response()->json([
      'success' => true,
      'task' => $task
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Task  $task
   * @return \Illuminate\Http\Response
   */
  public function destroy(Task $task)
  {
    $task->delete();
    
    return response()->json(['success' => true]);
  }
}
