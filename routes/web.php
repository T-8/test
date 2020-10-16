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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
        Route::get('index', [App\Http\Controllers\TestController::class, 'index'])->name('contact.index');
        Route::get('create', [App\Http\Controllers\TestController::class, 'create'])->name('contact.create');
        Route::post('store', [App\Http\Controllers\TestController::class, 'store'])->name('contact.store');
        Route::get('show/{id}', [App\Http\Controllers\TestController::class, 'show'])->name('contact.show');
        Route::get('edit/{id}', [App\Http\Controllers\TestController::class, 'edit'])->name('contact.edit');
        Route::post('update/{id}', [App\Http\Controllers\TestController::class, 'update'])->name('contact.update');
        Route::post('destroy/{id}', [App\Http\Controllers\TestController::class, 'destroy'])->name('contact.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
