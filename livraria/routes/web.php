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

Route::get('/', function () {
    return view('welcome');
});
route::get('/livros', 'App\http\Controllers\LivrosController@index')->name('livros.index');

route::get('/autores', 'App\http\Controllers\AutoresController@index')->name('autores.index');

route::get('/editoras', 'App\http\Controllers\EditorasController@index')->name('editoras.index');

route::get('/generos', 'App\http\Controllers\GenerosController@index')->name('generos.index');

route::get('/livros/{id}/show', 'App\http\Controllers\LivrosController@show')->name('livros.show');

route::get('/generos/{id}/show', 'App\http\Controllers\GenerosController@show')->name('generos.show');

route::get('/editoras/{id}/show', 'App\http\Controllers\EditorasController@show')->name('editoras.show');

route::get('/autores/{id}/show', 'App\http\Controllers\AutoresController@show')->name('autores.show');

route::get('/livros/create', 'App\http\Controllers\LivrosController@create')->name('livros.create');

route::post('/livros', 'App\http\Controllers\LivrosController@store')->name('livros.store');

route::get('/autores/create', 'App\http\Controllers\AutoresController@create')->name('autores.create');

route::post('/autores', 'App\http\Controllers\AutoresController@store')->name('autores.store');

Route::get('/livros/{id}/edit', 'App\Http\Controllers\LivrosController@edit')
->name('livros.edit');

Route::patch('/livros', 'App\Http\Controllers\LivrosController@update')
->name('livros.update');

Route::get('/livros/{id}/delete', 'App\Http\Controllers\LivrosController@delete')
->name('livros.delete');

Route::delete('/livros', 'App\Http\Controllers\LivrosController@destroy')
->name('livros.destroy');

Route::get('/autores/{id}/edit', 'App\Http\Controllers\AutoresController@edit')
->name('autores.edit');

Route::patch('/autores', 'App\Http\Controllers\AutoresController@update')
->name('autores.update');

Route::get('/autores/{id}/delete', 'App\Http\Controllers\AutoresController@delete')
->name('autores.delete');

Route::delete('/autores', 'App\Http\Controllers\AutoresController@destroy')
->name('autores.destroy');

Route::get('/editoras/{id}/edit', 'App\Http\Controllers\EditorasController@edit')
->name('editoras.edit');

Route::patch('/editoras', 'App\Http\Controllers\EditorasController@update')
->name('editoras.update');

Route::get('/editoras/{id}/delete', 'App\Http\Controllers\EditorasController@delete')
->name('editoras.delete');

Route::delete('/editoras', 'App\Http\Controllers\EditorasController@destroy')
->name('editoras.destroy');

Route::get('/generos/{id}/edit', 'App\Http\Controllers\GenerosController@edit')
->name('generos.edit');

Route::patch('/generos', 'App\Http\Controllers\GenerosController@update')
->name('generos.update');

Route::get('/generos/{id}/delete', 'App\Http\Controllers\GenerosController@delete')
->name('generos.delete');

Route::delete('/generos', 'App\Http\Controllers\GenerosController@destroy')
->name('generos.destroy');




