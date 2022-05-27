<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use App\Models\Banner;
use App\Models\City;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Detail;
use App\Models\Diapo;
use App\Models\Image;
use App\Models\Info;
use App\Models\Newsletter;
use App\Models\Product;
use App\Models\Size;
use App\Models\State;
use App\Models\Type;
use Illuminate\Http\Request;
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


// Partie front ========================================================================
// Welcome/Home
Route::get('/', function () {
    
    // sliderBanner.blade.php
    // les 2 variables pour le carousel
    $prems = Diapo::where('bool', 1 )->first(); #variable $prems -> pour choisir la première image grâce au bouléen 
    $diapos = Diapo::where('bool', 0)->inRandomOrder()->limit(2)->get(); #$diapos -> pour prendre les autres images grace au bouléen, au hasard et il en prend 2
    // variable $stars pour l'image star que l'on sélectionne grace à un booléen et que l'on pourra modifier dans le backOffice
    $stars = Image::where('bool', 1)->first();
    // variable $last pour prendre le dernier product ajouté dans la table
    $last = Image::orderby('created_at', 'desc')->first();
    // variable $products pour prendre les products 270 x 270 -> 5 au hasard
    $products = Product::all()->random(5);
    // variable pour le blog de la page home
    $articles = Article::all()->random(2); #prendre 2 images d'article au hasard
    $comments = Comment::all(); # trouver une solution pour compter les comments
    // variable $infos pour le about us dans le footer
    $infos = Info::all();
    $banners = Banner::all();
    $newsletters = Newsletter::all();
    return view('welcome', compact('diapos', 'prems', 'stars', 'last', 'products', 'articles', 'comments', 'infos', 'banners', 'newsletters'));
});

// Products
Route::get('/search', [ProductController::class, 'search']);
Route::resource('/product', ProductController::class);
// Articles
Route::resource('/blog', BlogController::class);
Route::resource('/article', ArticleController::class);
// About us
Route::resource('/team', TeamController::class);
// Newsletter
Route::resource('newsletter', NewsletterController::class);

// My account
Route::resource('/user', UserController::class);
Route::get('/myaccount', function () {
    $infos = Info::all();
    $banners = Banner::all();
    $countries = Country::all();
    $states = State::all();
    $cities = City::all();
    return view('pages.myaccount', compact('infos', 'banners', 'countries', 'states', 'cities'));
})->middleware(['auth']);
// Contact
Route::get('/contact', function () {
    $infos = Info::all();
    $banners = Banner::all();
    return view('pages.contact', compact('infos', 'banners'));
});

// Panier
Route::get('/cart', function () {
    $infos = Info::all();
    return view('pages.panier.cart', compact('infos'));
});

Route::get('/checkout', function () {
    $infos = Info::all();
    return view('pages.panier.checkout', compact('infos'));
});

Route::get('/order', function () {
    $infos = Info::all();
    return view('pages.panier.order', compact('infos'));
});


// Dashboard
Route::get('/dashboard', function () {
    $infos = Info::all();
    $banners = Banner::all();
    return view('dashboard', compact('infos', 'banners'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




// Partie Mailing ========================================================================
Route::get('/message', [MessageController::class, 'formMessageGoogle']);
Route::post('/message/send', [MessageController::class, 'sendMessageGoogle'])->name('send.message.google');



// Partie back ========================================================================

Route::get('/backHome', function () {
    $infos = Info::all();
    return view('pages.backoffice.backHome', compact('infos'));
});
Route::get('/backProduct', function () {
    $infos = Info::all();
    return view('pages.backoffice.backProduct', compact('infos'));
});
Route::get('/backBlog', function () {
    $infos = Info::all();
    return view('pages.backoffice.backBlog', compact('infos'));
});
Route::get('/backAbout', function () {
    $infos = Info::all();
    $banners = Banner::all();
    return view('pages.backoffice.backAbout', compact('infos', 'banners'));
});
Route::get('/backContact', function () {
    $infos = Info::all();
    return view('pages.backoffice.backContact', compact('infos'));
});
Route::get('/backPanier', function () {
    $infos = Info::all();
    return view('pages.backoffice.backPanier', compact('infos'));
});


