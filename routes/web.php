<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::middleware('verified')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function() {

        Route::get('/', 'HomeController@index')->name('logged_in');

        Route::get('/homepage', 'HomeController@homepage')->name('homepage');
        
        Route::resource('/posts', 'PostController');
    });

// Route::get('{any?}',function(){
//     return view('guest.home');
// })->where('any','.*');

Route::fallback(function(){
    return view('guest.home');
});