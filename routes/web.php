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
})->name('home');

Route::get('/groups', function () {
    return view('Groups');
})->name('groups');

Route::get('/knowladge', function () {
    return view('Knowladge');
})->name('knowladge');

Route::get('/debate', function () {
    return view('debate');
})->name('debate');
// login not in used as replaced by newuserp page
// Route::get('/login', function () {
//     return "<h1>Hello it is working</h1>";
// });

Route::view('/newuser','/pages/newuser')->name('newuser');

// below for new user
Route::get('/newuser/{name}', function($name) {
    if ($name==null) {
        return view("<h1>Name is not given</h1>");
    }
    return view('pages/userprofile');
});
// above for new user login/signup

// below for redirecting if a route is changed use in
// Route::redirect('/new name to search','/main route name to redirect');


// below for the routes which are unknown /not founded
Route::fallback(function(){
    return "<img src='https://freefrontend.com/assets/img/html-funny-404-pages/CodePen-404-Page.gif'>";
});