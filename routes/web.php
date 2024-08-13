<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\cardController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;


// home,about,blog,card,contact,product,product-1 routes
Route::get('/',[homeController::class,'index'])->name('home');
Route::get('blog',[blogController::class,'index'])->name('blog');
Route::get('card',[cardController::class,'index'])->name('card');
Route::get('contact',[contactController::class,'index'])->name('contact');
Route::get('product',[productController::class,'index'])->name('product');
Route::get('product-1',[productController::class,'product'])->name('product_1');

// about routes
Route::get('about',[aboutController::class,'index'])->name('about');
Route::get('privacy_policy',[aboutController::class,'privacy_policy'])->name('privacy_policy');
Route::get('return_policy',[aboutController::class,'return_policy'])->name('return_policy');
Route::get('terms',[aboutController::class,'terms'])->name('terms');
