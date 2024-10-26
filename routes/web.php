<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

// Route::get('/home', function () {
//     return view('Home');
// });

Route::view('/home', 'Home');

// Route::redirect('/home', '/'); #Redirecting home page to welcome page


Route::get('/about/{name}', function ($name) {
    return view('About', ['name'=> $name]);
});   # Adding Dynamic name along with about path.