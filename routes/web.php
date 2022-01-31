<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomePage@store') -> name('home');

Route::get('comic/{id}', 'HomePage@comic') -> name('comic');

Route::get('create', 'HomePage@create') -> name('create');
Route::post('cassa', 'HomePage@cassa') -> name('cassa');

Route::get('edit/{id}', 'HomePage@edit') -> name('edit');
Route::post('update/{id}', 'HomePage@update') -> name('update');

Route::get('delete/{id}', 'HomePage@delete') -> name('delete');