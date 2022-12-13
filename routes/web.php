<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
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
Route::get('/search', [SearchController::class, 'index'])->name('products') ;

Route::get('/search/simple', [SearchController::class, 'simple'])->name('simple');
Route::get('/search/advance', [SearchController::class, 'advance'])->name('advance');

// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');


// Route::get('/people', 'SearchController@index');
// Route::get('/people/simple', 'SearchController@simple')->name('simple_search');
// Route::get('/people/advance', 'SearchController@advance')->name('advance_search');

Route::get('/', function () {
    return view('welcome');
});
