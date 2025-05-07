<?php

use Illuminate\Support\Facades\Route;
use App\Models\brand;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});
Route::get('/contact', function(){
    return view('contact');
});

Route::get('/product', function(){
    $brands = Brand::with('products')->get();
    return view('product', compact('brands'));
});