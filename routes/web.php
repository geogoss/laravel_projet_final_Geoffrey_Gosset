<?php

use App\Models\Article;
use App\Models\Detail;
use App\Models\Diapo;
use App\Models\Image;
use Illuminate\Support\Facades\Request;
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
    
    // sliderBanner.blade.php
    // les 2 variables pour le carousel
    $prems = Diapo::where('bool', 1 )->first(); #variable $prems -> pour choisir la première image grâce au bouléen 
    $diapos = Diapo::where('bool', 0)->inRandomOrder()->limit(2)->get(); #$diapos -> pour prendre les autres images grace au bouléen, au hasard et il en prend 2
    // variable $stars pour l'image star que l'on sélectionne grace à un booléen et que l'on pourra modifier dans le backOffice
    $stars = Image::where('bool', 1)->first();
    // variable $last pour prendre le dernier product ajouté dans la table
    $last = Image::orderby('created_at', 'desc')->first();
    // variable $products pour prendre les products 270 x 270 5 au hasard
    $products = Image::all()->where('product_id', '<', 6);

    $articles = Article::all()->random(2);
    // $comments = Article::where('article_id', ); # trouver une solution pour compter les comments
    return view('welcome', compact('diapos', 'prems', 'stars', 'last', 'products', 'articles'));
});

// Route::get('/home', function () {
//     return view('pages.home');
// });

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
