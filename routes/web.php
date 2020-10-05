<?php

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
Route::get('/profile', 'ProfileController@show')->name('profile');
Route::get('profile/edit', 'ProfileController@index')->name('profile.edit');
Route::post('/profile', 'ProfileController@store')->name('profile.store');
Route::get('/doctorlist', 'DoctorlistController@show')->name('doctorlist');

Route::group(['middleware'=>['auth']],function() {
    Route::get('/appointment', 'AppointmentController@show')->name('appointment');
    Route::post('add/appointment', 'AppointmentController@store')->name('appointment.add');
});


Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['auth','admin']],function() {

    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/doctor', 'Admin\DoctorController@show')->name('add.doctor');
    Route::post('add/doctor', 'Admin\DoctorController@store')->name('add.doctor.input');

});

