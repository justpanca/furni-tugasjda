<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/blog', function () {
    return view('blog');
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

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/notifregistration', function () {
    return view('notifregistration');
});

Route::controller(AuthController::class)->group(function(){
    Route::get("/loginpage", "loginpage")->name("loginpage");
    Route::post("/login", "login")->name("login");
});