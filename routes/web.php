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
 
Route::get('halo', function(){
    return 'Hello world! Halo semuanya, selamat belajar Laravel.';
});

Route::get('contents', 'ContentsController@index');

Route::resource('file','File');
Route::resource('kontak','Kontak'); //tambahkan baris ini

Route::get('/', function () {
    return view('index');
});
Route::get('/halaman-kedua', function () {
    return view('halamandua');
});

// Login
Route::get('home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Mail
Route::get('/email', function () {
    return view('send_email');
});
Route::post('/sendEmail', 'Email@sendEmail');

// Rest
Route::get('/kontakapi','ControllerKontak@index');
Route::get('/kontak/{id}','ControllerKontak@show');
Route::post('/kontak/store','ControllerKontak@store');
Route::post('/kontak/update/{id}','ControllerKontak@update');
Route::post('/kontak/delete/{id}','ControllerKontak@destroy');
