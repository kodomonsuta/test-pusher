<?php

use App\Events\MessageSent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/send', function () {
    event(new MessageSent('Hello World'));
    return 'Message Sent';
});
