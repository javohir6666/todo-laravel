<?php
use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class, 'index']);

Route::get('create', [TodoController::class, 'create']);
Route::get('save_new_todo', [TodoController::class, 'store']);

Route::get('details', [TodoController::class, 'details']);

Route::get('edit/{id}', [TodoController::class, 'edit']);
Route::get('update/{id}', [TodoController::class, 'update']);

Route::get('delete/{id}', [TodoController::class, 'delete']);


