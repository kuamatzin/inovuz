<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email', function($nombre, $email, $mensaje){
    Mail::to('');
});