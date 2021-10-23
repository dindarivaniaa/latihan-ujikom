<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Role;

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
    return redirect('login');
});

Auth::routes();

// Admin
Route::get('admin/home', 'Admin\HomeController@index')->name('admin/home');
Route::get('admin/profile', 'Admin\ProfileController@profile');
Route::get('admin/jadwal', 'Admin\jadwalController@jadwal');
Route::get('admin/soal', 'Admin\soalController@soal');
Route::get('admin/hasil', 'Admin\hasilController@hasil');
Route::get('admin/kelolasiswa', 'Admin\KelolasiswaController@index');
Route::get('admin/kelolaguru', 'Admin\KelolaguruController@index');

// Teacher
Route::get('teacher/home', 'Teacher\HomeController@index')->name('teacher/home');;
Route::get('teacher/profile', 'Teacher\ProfileController@index');
Route::get('teacher/jadwal', 'Teacher\JadwalController@index');
Route::get('teacher/hasil', 'Teacher\HasilController@index');
Route::get('teacher/soal', 'Teacher\SoalController@index');
Route::get('teacher/kelolasiswa', 'Teacher\KelolasiswaController@index');

// Student
Route::get('student/home', 'Student\HomeController@index')->name('student/home');;
Route::get('student/profile', 'Student\ProfileController@index');
Route::get('student/jadwal', 'Student\JadwalController@index');
Route::get('student/hasil', 'Student\HasilController@index');
Route::get('student/soal', 'Student\SoalController@index');


Route::get('logout',function(){
    Auth::logout();
    return redirect('login');
});


