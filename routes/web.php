<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Order_Management;
use App\Http\Controllers\Product_Management;
use App\Http\Controllers\Slider_Management;


Route::get('/',[Order_Management::class,'index'])->name('order');
Route::get('product',[Product_Management::class,'index'])->name('product');
Route::get('slider',[Slider_Management::class,'slider'])->name('slider');
Route::get('add_product',[Product_Management::class,'add_product'])->name('add_product');
Route::get('edit_product/{id}',[Product_Management::class,'edit_product'])->name('edit_product');
Route::get('add_categories',[Order_Management::class,'add_categories'])->name('add_categories');
Route::get('edit_categories',[Order_Management::class,'edit_categories'])->name('edit_categories');

Route::get('add_slider',[Slider_Management::class,'add_slider'])->name('add_slider');
Route::get('edit_slider',[Slider_Management::class,'edit_slider'])->name('edit_slider');
