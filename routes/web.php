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
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login')->name('auth.login.post');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

// Auth::routes();

Route::get('/', 'DashboardController@dashboard')->name('dashboard');
Route::get('/client', 'DashboardController@client')->name('client');
Route::get('/client/edit/{id}', 'DashboardController@client_edit')->name('client_edit');
Route::post('/client/edit/{id}', 'DashboardController@client_edit_save')->name('client_edit_save');
Route::get('/client/create', 'DashboardController@client_create')->name('client_create');
Route::post('/client/create', 'DashboardController@client_create_save')->name('client_create_save');

Route::get('/notiifcation', 'DashboardController@notiifcation')->name('notiifcation');

Route::get('/employee', 'DashboardController@employee')->name('employee');
Route::get('/employee/edit/{id}', 'DashboardController@employee_edit')->name('employee_edit');
Route::post('/employee/edit/{id}', 'DashboardController@employee_edit_save')->name('employee_edit_save');
Route::get('/employee/create', 'DashboardController@employee_create')->name('employee_create');
Route::post('/employee/create', 'DashboardController@employee_create_save')->name('employee_create_save');

Route::get('admin/profile', 'DashboardController@profile')->name('profile');
Route::post('admin/profile', 'DashboardController@EditProfile')->name('EditProfile');
Route::post('admin/ResetPwd', 'DashboardController@ResetPwd')->name('ResetPwd');
Route::post('admin/updatePhoto', 'DashboardController@update_avatar')->name('updatePhoto');

Route::post('client_destroy/{id}', 'DashboardController@client_destroy')->name('client_destroy');
Route::post('employee_destroy/{id}', 'DashboardController@employee_destroy')->name('employee_destroy');

