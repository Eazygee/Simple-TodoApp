<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
//});

 Route::get('/', [TasksController::class, 'home']);
Route::get('/index', [TasksController::class, 'index']);
Route::get('create', [TasksController::class, 'create']);
Route::get('/{id}/edit', [TasksController::class, 'edit']);
Route::get('/update', [TasksController::class, 'update']);
Route::post('upload', [TasksController::class, 'upload']);
Route::get('/{id}/completed', [TasksController::class, 'completed']);
Route::get('/{id}/delete', [TasksController::class, 'delete']);