<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::prefix('logged')
//     ->middleware('auth')
//     ->group(function () {
//         Route::get('/restricted-zone', 'TestController@index')->name('restricted');
// });

Route::get('/free-zone', 'TestController@index')->name('free');


Route::get('/restricted-zone', 'TestController@index', function () {

})->middleware('auth');

        // Route::get('/restricted-zone', 'TestController@index')->name('restricted');

