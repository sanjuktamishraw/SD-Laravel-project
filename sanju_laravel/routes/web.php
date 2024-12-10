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
    return view('welcome');
});
Route::get('/Demo1', function () {
    return view('Homepage');
});
Route::get('/Demo2', function () {
    return view('Menu');
});
Route::get('/Demo3', function () {
    return view('courses');
});
Route::get('/Demo4', function () {
    return view('course2');
});
Route::get('/Demo5', function () {
    return view('enroll');
});
Route::get('/Demo6', function () {
    return view('signup');
});
Route::get('/Demo7', function () {
    return view('login');
});
Route::get('/Demo8', function () {
    return view('about');
});