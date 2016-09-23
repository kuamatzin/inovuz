<?php

use App\Mail\ContactoRecibido;
use App\Mail\EnviarMensaje;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email/{nombre}/{email}/{mensaje}', function($nombre, $email, $mensaje){
    Mail::to($email)->send(new ContactoRecibido($nombre));
    Mail::to('carlos@inovuz.com')->send(new EnviarMensaje($nombre, $email, $mensaje));
});