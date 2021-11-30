<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PageController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\User\ProductController;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

//user
Route::prefix('/user')->group(function () {
    //product
    Route::get('/product', [App\Http\Controllers\User\ProductController::class, 'index'])->name('product');
    Route::get('/product/detail', [App\Http\Controllers\User\ProductController::class, 'detail'])->name('product.detail');

    //post
    Route::get('/post', [App\Http\Controllers\User\PostController::class, 'index'])->name('post');
    Route::get('/post/detail', [App\Http\Controllers\User\PostController::class, 'detail'])->name('post.detail');

    //page
    Route::get('/page/about_us', [App\Http\Controllers\User\PageController::class, 'about_us'])->name('page.about_us');
    Route::get('/page/contact', [App\Http\Controllers\User\PageController::class, 'contact'])->name('page.contact');

    //cart
    Route::get('/cart/show', [App\Http\Controllers\User\CartController::class, 'show'])->name('cart.show');
    Route::get('/cart/checkout', [App\Http\Controllers\User\CartController::class, 'checkout'])->name('cart.checkout');
});

//admin
Route::prefix('/admin')->group(function () {
    //dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');

    //order
    Route::get('/order', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.order.index');

    //user
    Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.index');
    Route::get('/user/add', [App\Http\Controllers\Admin\UserController::class, 'add'])->name('admin.user.add');

    //page
    Route::get('/page', [App\Http\Controllers\Admin\PageController::class, 'index'])->name('admin.page.index');
    Route::get('/page/add', [App\Http\Controllers\Admin\PageController::class, 'add'])->name('admin.page.add');

    //post
    Route::get('/post', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('admin.post.index');
    Route::get('/post/add', [App\Http\Controllers\Admin\PostController::class, 'add'])->name('admin.post.add');

    //post_category
    Route::get('/post_category', [App\Http\Controllers\Admin\PostCategoryController::class, 'index'])->name('admin.post_category.index');

    //product
    Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/product/add', [App\Http\Controllers\Admin\ProductController::class, 'add'])->name('admin.product.add');

    //product_category
    Route::get('/product_category', [App\Http\Controllers\Admin\ProductCategoryController::class, 'index'])->name('admin.product_category.index');
});

