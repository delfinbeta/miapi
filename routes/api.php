<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

// Route::apiResource('categories', 'Api\CategoryController')->middleware('cors');

Route::apiResources([
  'users' => 'Api\UserController',
  'categories' => 'Api\CategoryController',
  'tasks' => 'Api\TaskController'
]);
