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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

/*Route::post('/kontraktorform', function () {
    return view('kontraktorform');
});*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/homek/{id}', function () {
//     return view('homek');
// });
Route::get('/homek/{id}', 'HomekController@homek');
Route::get('/dashkar', function () {
    return view('dashkar');
});

Route::get('/rank', function () {
    return view('rank');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homek', 'HomekController@index2')->name('homek');
Route::get('/dashkar', 'DashkarController@index')->name('dashkar');
Route::get('/rank', 'RankController@index')->name('rank');
Route::get('/welcome', 'WelcomeController@index')->name('welcome');

Route::get('/inputlokasi', 'LokasiController@index')->name('inputlokasi');
Route::post('lokasis.store', 'LokasiController@store');

Route::get('/kontraktorform', 'KontraktorController@kontraktorform')->name('kontraktorform');
Route::resource('kontraktors', 'KontraktorController');
Route::post('kontraktors.store', 'KontraktorController@store');

Route::get('/othersform', 'OthersController@othersform')->name('othersform');
Route::resource('others','OthersController');
Route::post('others.store', 'OthersController@store');

Route::get('/homek', 'HomekController@homek')->name('homek');
Route::resource('homeks','HomekController');
Route::post('homeks.store', 'HomekController@store');

Route::get('/karyawan', 'KaryawanController@home')->name('karyawan');
Route::resource('karyawans','KaryawanController');
Route::post('karyawans.store', 'KaryawanController@store');