<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = Category::all();

    return response()->json($categories);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->only(['name']);

    $this->validate($request, [
      'name' => 'required'
    ]);

    $category = Category::create($data);

    return response()->json([
      'success' => true,
      'category' => $category
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function show(Category $category)
  {
    return response()->json([
      'success' => true,
      'category' => $category
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Category $category)
  {
    $this->validate($request, [
      'name' => 'required'
    ]);

    $category->fill($request->all());
    $category->save();

    return response()->json([
      'success' => true,
      'category' => $category
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function destroy(Category $category)
  {
    $category->delete();
    
    return response()->json(['success' => true]);
  }
}
