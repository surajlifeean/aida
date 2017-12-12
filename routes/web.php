<?php

use App\Notifications\RegistrationConfirmation;
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
    return view('main');
});

Auth::routes();

Route::get('notify',function(){

	$users=App\User::get();

// 	$user->notify(new RegistrationConfirmation());


// Notification::send($users, new RegistrationConfirmation());
	Notification::route('mail','suraj@accenza.co')
            ->notify(new RegistrationConfirmation());

});

Route::Resource('/contactus','ContactusController');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){

Route::get('/login','Auth\AdminLoginController@showloginform')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/',"AdminController@index")->name('admin');
});