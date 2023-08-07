<?php

use App\Http\Controllers\PostController;
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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get("/about-us", function () {
    return "<a href='/'>Homepage</a> <h1>About US</h1>";
})->name('about');

Route::get('posts/{id?}/comment/{comment?}/', [PostController::class, "postFun"])->name('posts')->whereNumber('id')->whereAlpha('comment');

Route::get('/about', function () {
    return view('/pages/about');
});

Route::get('/contact', function () {
    return view('/pages/contact');
})->name('contact');

Route::redirect('/about-us', 'about', 301);
