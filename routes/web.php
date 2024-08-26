<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Order_Management;
use App\Http\Controllers\Product_Management;
use App\Http\Controllers\Slider_Management;


Route::get('/',[Order_Management::class,'index'])->name('order');
Route::get('product',[Product_Management::class,'index'])->name('product');
Route::get('slider',[Slider_Management::class,'slider'])->name('slider');
