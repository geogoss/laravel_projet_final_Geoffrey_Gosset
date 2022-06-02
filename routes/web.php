<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResizeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Billing;
use App\Models\Card;
use App\Models\CardProduct;
use App\Models\City;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Detail;
use App\Models\Diapo;
use App\Models\Image;
use App\Models\Info;
use App\Models\Mailbox;
use App\Models\Newsletter;
use App\Models\Product;
use App\Models\Size;
use App\Models\State;
use App\Models\Team;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
// Pages principales
// Welcome/Home
Route::get('/', function () {
    
    // sliderBanner.blade.php
    // les 2 variables pour le carousel
    $prems = Diapo::where('bool', 1 )->first(); #variable $prems -> pour choisir la première image grâce au bouléen 
    $diapos = Diapo::where('bool', 0)->inRandomOrder()->limit(2)->get(); #$diapos -> pour prendre les autres images grace au bouléen, au hasard et il en prend 2
    // variable $stars pour l'image star que l'on sélectionne grace à un booléen et que l'on pourra modifier dans le backOffice
    $stars = Product::where('bool', 1)->first();
    $starlette = Product::all();
    // variable $last pour prendre le dernier product ajouté dans la table
    $last = Product::where('bool', 0)->orderby('created_at', 'desc')->first();
    // variable $products pour prendre les products 270 x 270 -> 5 au hasard
    $products = Product::all()->random(5);
    // variable pour le blog de la page home
    $articles = Article::all()->random(2); #prendre 2 images d'article au hasard
    $comments = Comment::all(); # trouver une solution pour compter les comments
    // variable $infos pour le about us dans le footer
    $infos = Info::all();
    $banners = Banner::all();
    $newsletters = Newsletter::all();
    $cards = CardProduct::where('card_id', Auth::user()->card->id)->get();

    return view('welcome', compact('cards', 'starlette','diapos', 'prems', 'stars', 'last', 'products', 'articles', 'comments', 'infos', 'banners', 'newsletters'));
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
    $banners = Banner::all();
    $cards = CardProduct::where('card_id', Auth::user()->card->id)->get();
    $card = Card::all();
    $sum = 0;
    $quantity = 1;

        foreach ($cards as $item) {
            if ($item->user_id == Auth::user()->id) {
                $sum += ($item->product->price * $item->cardproduct->amount);
            }
        }


    return view('pages.panier.cart', compact('infos', 'banners', 'cards', 'sum'));
});

Route::get('/checkout', function () {
    $infos = Info::all();
    $billing = Billing::all();
    $countries = Country::all();
    $states = State::all();
    $cities = City::all();
    $banners = Banner::all();
    return view('pages.panier.checkout', compact('infos', 'billing', 'countries', 'states', 'cities', 'banners'));
});

Route::get('/order', function () {
    $infos = Info::all();
    $banners = Banner::all();
    return view('pages.panier.order', compact('infos', 'banners'));
});


// Dashboard
Route::get('/dashboard', function () {
    $infos = Info::all();
    $banners = Banner::all();
    $users = User::all();
    return view('dashboard', compact('infos', 'banners', 'users'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Controller particulier
Route::resource('/avatar', AvatarController::class);
Route::resource('/type', TypeController::class);
Route::resource('/comment', CommentController::class);
Route::resource('/note', NoteController::class);
Route::resource('/info', InfoController::class);
Route::resource('/mailbox', MailboxController::class);
Route::resource('card', CardController::class);


// Controller image resize ======================================================================
Route::post('/resize-file', [ResizeController::class, 'resizeImage'])->name('resizeImage');

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
    $products = Product::orderBy('id', 'desc')->get();
    return view('pages.backoffice.product.backProduct', compact('infos', 'products'));
});
Route::get('/backBlog', function () {
    $infos = Info::all();
    $articles = Article::orderBy('id', 'desc')->get();
    return view('pages.backoffice.blog.backBlog', compact('infos', 'articles'));
});
Route::get('/backAbout', function () {
    $infos = Info::all();
    $banners = Banner::all();
    $teams = Team::all();
    return view('pages.backoffice.aboutus.backAbout', compact('infos', 'banners', 'teams'));
});
Route::get('/backContact', function () {
    $infos = Info::all();
    return view('pages.backoffice.backContact', compact('infos'));
});
Route::get('/backMailBox', function () {
    $infos = Info::all();
    $emails = Mailbox::orderBy('id', 'desc')->get();
    return view('pages.backoffice.mailbox.backMailBox', compact('infos', 'emails'));
});
Route::get('/backPanier', function () {
    $infos = Info::all();
    return view('pages.backoffice.backPanier', compact('infos'));
});


