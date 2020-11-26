<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/',[MainController::class, 'index']);

    Route::get('add',[MainController::class, 'add'])->name('add');
    Route::post('add',[MainController::class, 'store']);

    Route::get('edit/{id}', [MainController::class, 'edit'])->name('edit');
    Route::put('edit/{id}', [MainController::class, 'update']);

    Route::delete('{id}', [MainController::class, 'destroy'])->name('destroy');
});
