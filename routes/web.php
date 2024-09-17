<?php

use App\Http\Controllers\Main\IndexController;
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

/*Route::get('/', function () {
    return 'aaaaaa';
});*/

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController'); //у нас в этом классе один метод, поэтому он будет подтягиваться автоматически, не надо его уакзывать принудительно через @
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
