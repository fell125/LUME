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

Route::redirect('/', 'lume');
Route::redirect('/admin','login');
Route::redirect('/lume', 'index');
Route::redirect('/campeonatos', 'campeonatos');
Route::redirect('/noticias', 'noticias');

Auth::routes();

//web
Route::get('index', 'Web\PageController@lume')->name('index');
Route::get('post/{slug}',      'Web\PageController@post')->name('post');
Route::get('campeonatos', 'Web\PageController@campeonatos')->name('campeonatos');
Route::get('campeonatos/{slug}',      'Web\PageController@campeonato')->name('campeonato');
Route::get('noticias', 'Web\PageController@noticias')->name('noticias');
Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('tag/{slug}', 	   'Web\PageController@tag')->name('tag');

Route::get('pesquisar', 'Web\PageController@pesquisar');
Route::post('pesquisar', 'Web\PageController@pesquisar');

//admin

Route::resource('tags','Admin\TagController');
Route::resource('categories','Admin\CategoryController');
Route::resource('posts','Admin\PostController');
Route::resource('campeonatosAdmin','Admin\CampeonatoController');