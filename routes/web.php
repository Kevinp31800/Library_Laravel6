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
    return redirect()->route('index');
});

 
Route::get('/books', 'BooksController@index')->name('index');

Route::get('/books/delete/{book}', 'BooksController@delete')->name('delete');
 
Route::get('books/create', 'BooksController@create')->name('create');
 
Route::get('books/{id}', 'BooksController@show');

Route::post('books', 'BooksController@store');


