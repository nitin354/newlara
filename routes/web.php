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


Route::get('/admin/login', function () {
    return view('admin.adminlogin');
})->name('login');

Route::get('/admin/forgetpassword', function () {
    return view('admin.forgot-password');
});
Route::middleware(['auth:admin'])->group(function () {

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/bloglist', function () {
    return view('admin.bloglist');
});

});

Route::get('/admin/register', function () {
    return view('admin.register');
});

