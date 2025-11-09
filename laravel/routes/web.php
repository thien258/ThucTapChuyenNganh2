<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/category', function () {
    return view('category');
})->name('category');
Route::get('/producdetail', function () {
    return view('producdetail');
})->name('producdetail');
Route::get('/productcheckout', function () {
    return view('productcheckout');
})->name('productcheckout');
Route::get('/confirmation', function () {
    return view('confirmation');
})->name('confirmation');
Route::get('/shoppingcart', function () {
    return view('shoppingcart');
})->name('shoppingcart');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blogdetail', function () {
    return view('blogdetail');
})->name('blogdetail');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/tracking', function () {
    return view('tracking');
})->name('tracking');

//////////////////
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/admin/category', function () {
    return view('admin/category/category-list');
})->name('category-list');
Route::get('/admin/product', function () {
    return view('admin/product/product-list');
})->name('product-list');
