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
    return view('auth.login',['title' => 'Login']);
})->middleware('guest');



Route::get('/signup',function (){
    return view('auth.signup',['title' => 'Sign Up']);
})->middleware('guest');

Route::post('/signup', [UserController::class,'store']);

Route::get('/home',function(){
    return view('pages.home',['title' => 'Home']);
});

Route::post('/login',[UserController::class,'login']);
