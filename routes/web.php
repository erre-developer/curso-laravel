<?php

use App\Http\Controllers\PortafolioControler;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contacto');
Route::get('/portafolio','ProjectController@index')->name('projects.index');
Route::post('/portafolio','ProjectController@store')->name('projects.store');
Route::get('/portafolio/crear','ProjectController@create')->name('projects.create');
Route::get('/portafolio/{project}/editar','ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}','ProjectController@update')->name('projects.update');

Route::get('/portafolio/{project}','ProjectController@show')->name('projects.show');

//Route::resource('portafolio', 'PortafolioController@index');
//nombre ruta URL                   Controlador                   nombre ruta invocada en el actions
Route::post('contactoPostMessageController', 'MessagesController@store')->name('contactoPost');




