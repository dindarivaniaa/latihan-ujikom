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

Route::middleware(['auth', 'role:admin|teacher|student'])->group(function () {
    Route::get('home', 'HomeController@index')->name('home');
});

// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/profile', 'Admin\ProfileController@profile');
    Route::get('admin/jadwal', 'Admin\jadwalController@jadwal');
    Route::get('admin/soal', 'Admin\soalController@soal');
    Route::get('admin/hasil', 'Admin\hasilController@hasil');
    Route::get('admin/kelolasiswa', 'Admin\KelolasiswaController@index');
    Route::get('admin/kelolaguru', 'Admin\KelolaguruController@index');
    Route::get('admin/editkelolaguruview/{id}', 'Admin\KelolaguruController@editview');
    Route::post('admin/editkelolaguru', 'Admin\kelolaguruController@edit');
    Route::get('admin/editkelolasiswaview/{id}', 'Admin\kelolasiswaController@editview');
    Route::post('admin/editkelolasiswa', 'Admin\kelolasiswaController@edit');


});

Route::middleware(['auth', 'role:teacher'])->group(function () {
   // Teacher
   Route::get('teacher/profile', 'Teacher\ProfileController@index');
   Route::get('teacher/jadwal', 'Teacher\JadwalController@index');
   Route::get('teacher/hasil', 'Teacher\HasilController@index');
   Route::get('teacher/soal', 'Teacher\SoalController@index');
   Route::get('teacher/kelolasiswa', 'Teacher\KelolasiswaController@index');
   Route::get('teacher/editkelolasiswaview/{id}', 'Teacher\kelolasiswaController@editview');
   Route::post('teacher/editkelolasiswa', 'Teacher\kelolasiswaController@edit');

});

Route::middleware(['auth', 'role:student'])->group(function () {
    // Student
    Route::get('student/profile', 'Student\ProfileController@index');
    Route::get('student/jadwal', 'Student\JadwalController@index');
    Route::get('student/hasil', 'Student\HasilController@index');
    Route::get('student/soal', 'Student\SoalController@index');
});











Route::get('logout',function(){
    Auth::logout();
    return redirect('login');
});


