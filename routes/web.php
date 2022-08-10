<?php

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


Route::get("facebooklogin","SocialCon@facebooklogin");
Route::get("facebookresponse","SocialCon@facebookresponse");

Route::get("googlelogin","SocialCon@googlelogin");
Route::get("googleresponse","SocialCon@googleresponse");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

