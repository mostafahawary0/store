<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\messageController;

 
  //dashboard

 Route::prefix('dashboard')->group(function(){
// login dashboard
    Route::get('/' , [AdminAuthController::class,'login2'])->name('dashboard');
    Route::post('/' , [AdminAuthController::class,'loginpost2'])->name('login.dashboard');
    Route::get('/logoutdashboard' , [AdminAuthController::class,'logout'])->name('logoutdashboard');

    
    
       Route::middleware(['admin'])->group(function () {

        //home page
        Route::get('/home', function () {
            return view('dashboard.home');
        })->name('homedashboard');
    
        // Settings 
        Route::get('/settings' , [SettingController::class,'password'])->name('password'); 
        Route::post('/settings' , [SettingController::class,'update'])->name('update.password'); 

        // about us 
        Route::get('/about' , [AboutController::class,'about'])->name('about'); 
        Route::post('/about' , [AboutController::class,'update'])->name('update.about');
        Route::get('/about/image/{id}' , [AboutController::class,'edit'])->name('image.about');
        Route::put('/about/image/{id}' , [AboutController::class,'imageupdate'])->name('image.update');

         // Sections
         Route::resource('/section' , SectionController::class);

        // products
         Route::resource('/product' , ProductController::class);
         Route::get('/product/image/{id}' , [ProductController::class,'editimage'])->name('image.product');
         Route::put('/product/image/{id}' , [ProductController::class,'imageupdate'])->name('aboutimage.update');
         Route::get('/product/images/{id}' , [ProductController::class,'editimages'])->name('images.product');
         Route::put('/product/images/{id}' , [ProductController::class,'uploadimages'])->name('upload.images');
         Route::delete('/product/images/{id}' , [ProductController::class,'destroyimages'])->name('delete.images');
         

          // orders
         Route::get('/orders' , [orderController::class,'showOrder'])->name('show.order'); 
         Route::get('/order-page/{id}' , [orderController::class,'oneOrder'])->name('one.order'); 
         Route::delete('/orders/{id}' , [orderController::class,'orderDestroy'])->name('delete.order');

           // messages
    Route::get('/inbox' , [messageController::class,'show'])->name('show.inbox'); 
    Route::get('/message/{id}' , [messageController::class,'one'])->name('one.message'); 
    Route::delete('/inbox/{id}' , [messageController::class,'messageDestroy'])->name('message.destroy');


    });
    

    
 });


 

