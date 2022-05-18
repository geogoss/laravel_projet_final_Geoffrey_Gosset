<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/shop', function () {
    return view('pages.shop-list');
});

Route::get('/showProduct', function () {
    return view('pages.showProduct');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/showblog', function () {
    return view('pages.showBlog');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/cart', function () {
    return view('pages.panier.cart');
});

Route::get('/checkout', function () {
    return view('pages.panier.checkout');
});

Route::get('/order', function () {
    return view('pages.panier.order');
});

Route::get('/myaccount', function () {
    return view('pages.myaccount');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
