<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::middleware('auth')->group(function () {
    // Your authenticated routes go here
});
Route::get('/admin/login', function () {
    //dd("here");
    return view('admin.adminlogin');
});

Route::get('/admin/forgetpassword', function () {
    //dd("here");
    return view('admin.forgot-password');
});

Route::get('/admin/dashboard', function () {
    //dd("here");
    return view('admin.dashboard');
});

Route::get('/admin/register', function () {
    //dd("here");
    return view('admin.register');
});
