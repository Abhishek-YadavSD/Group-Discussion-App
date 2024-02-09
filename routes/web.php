<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomAuthController;

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
Route::get('/newuser/{name}', function() {
    if($_GET['NAME']==null){
        return "<h1>Email is not Entered</h1>";
    }else{
    return view('pages/userprofile');
    }
});
// above for new user login/signup

// below for redirecting if a route is changed use in
// Route::redirect('/new name to search','/main route name to redirect');


// below for the routes which are unknown /not founded
Route::fallback(function(){
    return view('404page');
});


// Route::get('/login', function () {
//     return view('pages/newuser');
// });


Route::get('/login',[CustomAuthController::class,'login'])->name('newuser');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard']);



// below for test & learnin
Route::get('/test', function () {
    return view('testwork');
});