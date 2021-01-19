<?php

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index',[HomeController::class, 'index']);
Route::get('/generic',[HomeController::class, 'generic']);
Route::get('/elements',[HomeController::class, 'elements']);














/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


 Route::get('/data/{fname}/{lname}/{contact}/{gender}/{motto}', function ($fname = 'Jesusa',$lname = 'Mercado', $contact, $gender = 'Female', $motto = 'Time is Gold') {


    return view('data',['fname' => $fname, 'lname' => $lname, 'contact' => $contact, 'gender' => $gender, 'motto' => $motto]);
});
*/





