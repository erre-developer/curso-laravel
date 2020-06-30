<?php

use App\Http\Controllers\PortafolioControler;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('portafolio','ProjectController')
->parameters(['portafolio'=>'project'])
->names('projects');


// Route::get('/portafolio','ProjectController@index')->name('projects.index');
// Route::get('/portafolio/crear','ProjectController@create')->name('projects.create');

// Route::get('/portafolio/{project}/edit','ProjectController@edit')->name('projects.edit');
// Route::patch('/portafolio/{project}','ProjectController@update')->name('projects.update');

// Route::post('/portafolio','ProjectController@store')->name('projects.store');
// Route::get('/portafolio/{project}','ProjectController@show')->name('projects.show');

// Route::delete('/portafolio/{project}','ProjectController@destroy')->name('projects.destroy');


Route::view('/contacto', 'contact')->name('contacto');
//Route::resource('portafolio', 'PortafolioController@index');
//nombre ruta URL                   Controlador                   nombre ruta invocada en el actions
Route::post('contactoPostMessageController', 'MessageController@store')->name('contactoPost');




