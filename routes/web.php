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
    return view('welcome');
});

Route::get("/about-us", function () {
    return "<h1>About US</h1>";
});

Route::get('post/{id?}/comment/{commendId?}', function (string $id = null, string $comment) {
    // return "<h1>Posts Param: " . $id . "</h1>";
    if ($id) {
        return "<h1>Posts Param: $id </h1>" . "<h2>Comment: $comment </h2>";
    } else {
        return "<h1>No Id found</h1>";
    }
});
