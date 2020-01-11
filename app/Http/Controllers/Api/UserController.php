<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = User::all();

    return response()->json($users);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->only(['name', 'email', 'password']);

    $this->validate($request, [
      'name' => 'required|string',
      'email' => 'required|unique:users',
      'password' => 'required|min:8'
    ]);

    $user = User::create($data);

    return response()->json([
      'success' => true,
      'user' => $user
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function show(User $user)
  {
    return response()->json([
      'success' => true,
      'user' => $user
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, User $user)
  {
    $this->validate($request, [
      'name' => 'required|string',
      'email' => ['required', Rule::unique('users')->ignore($user->id)]
    ]);

    $user->fill($request->all());
    $user->save();

    return response()->json([
      'success' => true,
      'user' => $user
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    $user->delete();
    
    return response()->json(['success' => true]);
  }
}
