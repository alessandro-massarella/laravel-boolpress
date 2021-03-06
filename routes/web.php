<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RestrictedController;
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


Route::get('/free-zone', 'TestController@guest')->name('free');


Route::get('/restricted-zone', 'TestController@logged', function () {

})->middleware('auth')->name('restricted');


// Route::get('/posts', 'PostController@index');

// Route::get('/posts/create', 'PostController@create');

Route::resource('posts', 'PostController');

Route::get('/posts', 'IndexController@index');

