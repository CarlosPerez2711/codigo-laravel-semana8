<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ContactoController;
// Ruta para la vista principal
Route::view('/', 'home')->name('home');

// Rutas para las vistas estáticas
Route::view('contacto', 'contacto')->name('contacto');


// Rutas para las vistas de personaas
Route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas');
Route::get('personas/crear', 'App\Http\Controllers\PersonasController@create')->name('personas.create');
Route::get('personas/{nPerCodigo}/editar', 'App\Http\Controllers\PersonasController@edit')->name('personas.edit');
Route::patch('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@update')->name('personas.update');
Route::post('personas', 'App\Http\Controllers\PersonasController@store')->name('personas.store');
Route::get('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');
Route::delete('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@destroy')->name('personas.destroy');

Route::post('contacto', 'App\Http\Controllers\ContactoController@store')->name('contacto.store');
