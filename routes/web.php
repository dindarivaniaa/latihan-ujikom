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
    return view('template.main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@profile');
Route::get('/jadwal', 'jadwalController@jadwal');
Route::get('/soal', 'soalController@soal');
Route::get('/hasil', 'hasilController@hasil');

Route::get('logout',function(){
    Auth::logout();
    return redirect('login');
});


