<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/page-user', [App\Http\Controllers\PageUserController::class, 'index'])->name('page-user');
Route::get('/dien-thoai', [App\Http\Controllers\PageUserController::class, 'dienthoai'])->name('dien-thoai');
Route::get('/computer', [App\Http\Controllers\PageUserController::class, 'computer'])->name('computer');
Route::group(['prefix' => '/product'], function()
{
    Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product-list');

    Route::get('/add', [App\Http\Controllers\ProductController::class, 'getAdd'])->name('get-add');
    Route::post('/add',[App\Http\Controllers\ProductController::class, 'postAdd'])->name('post-add');
    Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'getEdit'])->name('get-edit');
    Route::post('/edit/{id}', [App\Http\Controllers\ProductController::class ,'postEdit'])->name('post-edit');
    Route::delete('/delete/{id}', [App\Http\Controllers\ProductController::class,'postDelete'])->name('product-delete');

});
