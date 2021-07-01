<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Models\Todo;
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

Route::get('/', [TodosController::class,'index']);
Route::get('/completed-todo', [TodosController::class,'completed_todo'])->name('completed-todo');
Route::get('/completed-todo/{id}', [TodosController::class,'complete_a_todo'])->name('complete-todo');

Route::resource('todo', TodosController::class);
