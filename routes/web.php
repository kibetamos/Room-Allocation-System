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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
Route::view('/', 'home'); 

Route::delete('/delete/reservation/{id}','ReservationController@destroy');

Route::resource('reservation', 'ReservationController');

Route::get('/room', 'RoomController@index')->name('room');
Route::view('/reservation', 'room'); 

Route::get('/reservation', 'ReservationController@index')->name('reservation');
Route::view('/reservationEdit', 'reservation'); 
Route::get('/edit/reservation/{id}','ReservationController@edit');
Route::post('/edit/reservation/{id}', 'ReservationController@update');


Route::get('/reservationCreate', 'ReservationController@create')->name('reservation');
Route::post('reservation', 'ReservationController@store')->name('reservation.store');
Route::view('/reservationCreate', 'reservationCreate')->middleware('auth');


Route::get('/rooms', 'RoomController@index'); 



//FOR ROOMS



Route::get('/roomsCreate', 'RoomController@create')->name('room');
Route::post('room', 'RoomController@store')->name('room.store');
Route::view('/roomsCreate', 'roomsCreate');

Route::delete('/delete/rooms/{id}','RoomController@destroy');

//OR LOGIN PAGE




