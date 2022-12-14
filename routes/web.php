<?php

use App\Http\Controllers\PopsController;
use App\Http\Controllers\SeriesController;
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
    return view('home');
})->name('home');
Route::resource('pops', PopsController::class, [
    'names' => [
        'index' => 'pops',
        'create' => 'popsCreate'
    ]
]);
Route::resource('series', SeriesController::class, [
    'names' => [
        'index' => 'series'
    ]
]);