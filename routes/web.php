<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('welcome',[PostController::class,'index']);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Route::get('add-post',[PostController::class,'create'])->name('add.post');
//Route::post('add-post',[PostController::class,'store'])->name('store.post');
//
//Route::get('edit-post/{id}',[PostController::class,'edit'])->name('edit.post');
//Route::put('edit-post/{id}',[PostController::class,'update'])->name('update.post');
//
//Route::delete('delete-post/{id}',[PostController::class,'destroy'])->name('delete.post');


Route::middleware(['auth'])->group(function (){
    Route::get('/',[UserController::class,'index']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('can:show posts');

    Route::get('add-post',[PostController::class,'create'])->name('add.post')->middleware('can:add posts');;
    Route::post('add-post',[PostController::class,'store'])->name('store.post')->middleware('can:add posts');

    Route::get('edit-post/{id}',[PostController::class,'edit'])->name('edit.post')->middleware('can:edit posts');
    Route::put('edit-post/{id}',[PostController::class,'update'])->name('update.post')->middleware('can:edit posts');

    Route::delete('delete-post/{id}',[PostController::class,'destroy'])->name('delete.post')->middleware('can:delete posts');

    Route::resource('/roles', RoleController::class);
});
