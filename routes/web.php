<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['class_place' => 'house']);
});
Route::get('/rooms/basement', function () {
    return view('rooms.basement', ['class_place' => 'basement']);
});
Route::get('/rooms/bedroom', function () {
    return view('rooms.bedroom', ['class_place' => 'bedroom']);
});
Route::get('/rooms/kitchen', function () {
    return view('rooms.kitchen', ['class_place' => 'kitchen']);
});
