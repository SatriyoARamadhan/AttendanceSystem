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

Route::get('/kehadiran', 'HomeController@index')->name('kehadiran'); //ini masuk ke form login siswa
Route::get('/home', 'HomeController@show')->name('home');


Route::group(['prefix' => 'staff', 'as' => 'staff.'], function () {
  Route::get('/login', 'StaffAuth\LoginController@showLoginForm')->name('login'); //ini masuk ke form login guru
  Route::post('/login', 'StaffAuth\LoginController@login'); //proses login
  Route::post('/logout', 'StaffAuth\LoginController@logout');

  Route::get('/register', 'StaffAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'StaffAuth\RegisterController@register');

  Route::post('/password/email', 'StaffAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'StaffAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'StaffAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'StaffAuth\ResetPasswordController@showResetForm');
});

Route::get('/student/{id}/edit', 'UserController@edit')->name('staff.student.edit'); 
Route::patch('/student/{id}/edit', 'UserController@update')->name('staff.student.update');
Route::delete('/student/{id}/delete', 'UserController@destroy')->name('staff.student.destroy'); //delete Finish

Route::get('/student/{id}/delete','UserController@delete');