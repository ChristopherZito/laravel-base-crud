<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomePage@store') -> name('home');

Route::get('comic/{id}', 'HomePage@comic') -> name('comic');
