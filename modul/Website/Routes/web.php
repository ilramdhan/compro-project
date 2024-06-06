<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', static function () {
    return view('home');
});
