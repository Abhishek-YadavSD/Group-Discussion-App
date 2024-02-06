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
    return view('Home');
});
Route::get('/groups', function () {
    return view('Groups');
});
Route::get('/knowladge', function () {
    return view('Knowladge');
});
Route::get('/debate', function () {
    return view('debate');
});
Route::get('/login', function () {
    return view('login');
});