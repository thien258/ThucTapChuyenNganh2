<?php
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ContactAdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('category', CategoryController::class);
        Route::get('/', [App\Http\Controllers\admin\AdminController::class, 'index'])
            ->name('dashboard');

        Route::resource('product',ProductController::class);
            Route::resource('contacts',ContactAdminController::class);
    });
   Route::resource('contact', ContactController::class);
Route::resource('comments', App\Http\Controllers\CommentController::class);
Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('welcome');
Route::get('/category_product/{category}', [App\Http\Controllers\HomeController::class,'category_product'])->name('category_product');
Route::get('/category_product/single_product/{category}', [App\Http\Controllers\HomeController::class,'single_product'])->name('single_product');


Route::get('/register', function () {
    return view('register');
})->name('register');


//////////////////
// Route::get('/admin', function () {
//     return view('admin');
// })->name('admin');

Auth::routes();
Route::get('logout',[HomeController::class,'logout'])->name('logout');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
