<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/engenharia', function () {
    return view('engenharia');
});

Route::get('/inteligencia', function () {
    return view('inteligencia');
});

Route::get('/tecnologia', function () {
    return view('tecnologia');
});