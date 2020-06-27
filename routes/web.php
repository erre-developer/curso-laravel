<?php

use App\Http\Controllers\PortafolioControler;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contacto');
Route::get('/portafolio','PortafolioController@index')->name('portafolio');

//Route::resource('portafolio', 'PortafolioController@index');

Route::post('contacto', 'MessagesController@store'); 


