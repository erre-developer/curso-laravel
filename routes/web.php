<?php

use App\Http\Controllers\PortafolioControler;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contacto');
Route::get('/portafolio','PortafolioController@index')->name('portafolio');

//Route::resource('portafolio', 'PortafolioController@index');

            //nombre ruta URL                   Controlador                   nombre ruta invocada en el actions
Route::post('contactoPostMessagesController', 'MessagesController@store')->name('contactoPost');


