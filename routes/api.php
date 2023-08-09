<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// apiのルーティング
Route::get('/students', 'App\Http\Controllers\StudentController@index');
Route::post('/students', 'App\Http\Controllers\StudentController@store');
Route::patch('/students/{student:id}', 'App\Http\Controllers\StudentController@update');
Route::delete('/students/{student:id}', 'App\Http\Controllers\StudentController@delete');

