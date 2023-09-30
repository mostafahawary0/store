<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned  to the "web" middleware group. Make something great!
|
*/


//login
Route::get('/login' , [AuthManager::class,'login'])->name('login');
Route::post('/login' , [AuthManager::class,'loginpost'])->name('login.post');
Route::get('/registration' , [AuthManager::class,'registration'])->name('registration');
Route::post('/registration' , [AuthManager::class,'registrationpost'])->name('registration.post');
Route::get('/logout' , [AuthManager::class,'logout'])->name('logout');

//registration
Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile', function () {
        return view('web.profile');
    })->name('profile');
});

Route::get('/', function () {
    return view('web.home');
})->name('home');