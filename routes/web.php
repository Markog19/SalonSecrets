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
Auth::routes();
 
Route::get('/', function () {
    return view('index');
});
Route::get('/login',function(){
	return view('auth/login');
})->name('login');
Route::get('/register',function(){
	return view('auth/register');
})->name('register');
 Route::get('/userpanel', function(){
 	return view('userpanel');
 });
 Route::get('profil', function(){
 	return view('profil');
 });





Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin_area', ['middleware' => 'admin', function () {
    //
}]);
 Route::middleware('auth', 'admin')->get('/home', 'HomeController@index');
 Route::get('/rezervacije','KorisniciUslugeContoller@index')->name('rezervacije.index');
 Route::post('/rezervacije/store','KorisniciUslugeContoller@store')->name('rezervacije.store');
Route::get('/profil', 'KorisniciUslugeContoller@show');
Route::get('/Administrator', 'UserController@index');
Route::get('/Administrator/{id}', 'UserController@delete')->name('Administrator/id');
Route::get('/profil/{id}', 'KorisniciUslugeContoller@delete')->name('profil/id');
Route::get('/profil/{id}', 'KorisniciUslugeContoller@update')->name('profil/id');
Route::get('/Administrator/{id}', 'UserController@update')->name('Administrator/id');








