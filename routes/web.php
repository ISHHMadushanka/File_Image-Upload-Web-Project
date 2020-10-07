<?php

use App\Http\Controllers\PostsController;
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
/*
Route::get('/', function () {
    return view('welcome');
}); */


 // Route::get('/', 'PagesController@index');


 // Route::get('/about', 'PagesController@about');


 // Route::get('/services', 'PagesController@services');

Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/services', 'App\Http\Controllers\PagesController@services');




/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
}); */

  Route::get('/users/{id}', function ($id) {
    return 'This is a user ' . $id;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', 'App\Http\Controllers\PostsController');


