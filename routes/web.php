<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\homeController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\messageController;

 

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



//home 
Route::get('/' , [homeController::class,'showProduct'])->name('home');

//search
Route::post('/search' , [homeController::class,'search'])->name('search');

//about us
Route::get('/about-us' , [AboutController::class,'show'])->name('about.us');

//sections
Route::get('/category/{id}/{title}' , [homeController::class,'showSection'])->name('section');


//single page product
Route::get('/product/{id}/{title}' , [homeController::class,'singleProduct'])->name('single.product');
Route::post('/product/{id}/{title}' , [orderController::class,'createOrder'])->name('create.order');


//contact us
Route::get('/contact-us' , [messageController::class,'contact'])->name('contact');
Route::post('/contact-us' , [messageController::class,'send'])->name('send.message');
 
 