<?php

use App\Models\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    foreach(Users::all() as $user) {
        dump($user->name);
    }
});
