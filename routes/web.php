<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/register', function () {
    return view('login');
});

Route::post('/registe',[UserController::class,'registe']);



Route::view('/newuser','/pages/newuser');

// below for new user
Route::get('/newuser/{name}', function($name) {
    return view('pages/userprofile');
});
// above for new user login/signup