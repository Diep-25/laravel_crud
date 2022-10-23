<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newController;
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
    return view('index');
});

Route::prefix('news')->group(function () {

    Route::get('new_add', [newController::class , 'create'])->name('news.create');
    Route::post('new_add', [newController::class, 'store'])->name('news.store');

    Route::get('new_list', [newController::class , 'list'])->name('news.list');

    Route::get('new_edit/{id}', [newController::class, 'edit'])->name('news.edit');
    Route::post('new_edit/{id}',[newController::class, 'update'])->name('news.update');
    Route::get('new_delete/{id}', [newController::class, 'delete'])->name('news.delete');
});
