<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

// Route::get('/home', function () {
//     return view('Home');
// });

// Route::view('/home', 'Home');

// Route::redirect('/home', '/'); #Redirecting home page to welcome page


// Route::get('/about/{name}', function ($name) {
//     return view('About', ['name'=> $name]);
// });   # Adding Dynamic name along with about path.

Route::get('/user', [UserController::class, 'getUser']); #Route for getUser
Route::get('about', [UserController::class,'aboutUser']); #Route for aboutUser
Route::get('user/{name}', [UserController::class,'getUserName']);
Route::get('admin', [UserController::class,'adminLogin']); #Route for admin
