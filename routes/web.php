<?php

use App\Http\Livewire\CreateStudent;
use App\Http\Livewire\CreateTodo;
use App\Http\Livewire\EditStudent;
use App\Http\Livewire\EditTodo;
use App\Http\Livewire\ShowStudents;
use App\Http\Livewire\ShowTodos;
use App\Http\Livewire\TodoList;
use Illuminate\Support\Facades\Route;

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
// });

// Route::get('/todo-list', TodoList::class)->name('todo-list');

// Route::get('/todo-list', ShowTodos::class)->name('todo-list');
// Route::get('/todo/add', CreateTodo::class);
// Route::get('/todo/edit/{id}', EditTodo::class);

Route::get('/', ShowStudents::class);
Route::get('/student-list', ShowStudents::class)->name('student-list');
Route::get('/student/add', CreateStudent::class);
Route::get('/student/edit/{id}', EditStudent::class);

