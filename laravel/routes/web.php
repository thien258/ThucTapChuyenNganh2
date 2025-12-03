<?php
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::prefix('admin')->name('admin.')->group(function () {
      Route::resource('category', CategoryController::class);
       Route::get('/', function () {
          return view('admin');
      })->name('dashboard');

      Route::resource('product',ProductController::class);
  });

Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/customer', function () {
    return view('customer');
})->name('customer');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Route::get('/category', function () {
//     return view('category');
// })->name('category');
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

Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/tracking', function () {
    return view('tracking');
})->name('tracking');

//////////////////
// Route::get('/admin', function () {
//     return view('admin');
// })->name('admin');

Auth::routes();
Route::get('logout',[HomeController::class,'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
