<?php

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/all', [App\Http\Controllers\HomeController::class, 'all'])->middleware('auth');

Route::get('/add', function(){
    Route::resource('store', 'TasksController');
    return view('tabledit');
})->middleware('auth');
Route::post('/store', [App\Http\Controllers\TasksController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('del/{name?}', [App\Http\Controllers\TasksController::class, 'delete']);
