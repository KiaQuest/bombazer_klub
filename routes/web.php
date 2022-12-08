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
Route::group(['namespace' => '\App\Http\Controllers'], function () {

    Route::get('/signup',[\App\Http\Controllers\Login::class,'showSignUp'])->name('m1');
    Route::post('/signup/do',[\App\Http\Controllers\Login::class,'signup'])->name('m2');
    Route::get('/', function () { return view('login'); })->name('m3');
    Route::post('/home',[\App\Http\Controllers\Login::class,'doLogin'])->name('login');
    Route::get('/anaSayfa',[\App\Http\Controllers\Login::class,'showHomePage'])->name('ana');
    Route::get('/qayida',[\App\Http\Controllers\in\Rules::class,'show'])->name('qayide');
    Route::get('/forum',[\App\Http\Controllers\in\Forum::class,'show'])->name('forum');
    Route::get('/klubice/{id?}',[\App\Http\Controllers\in\Club::class,'clubin'])->name('clubin');
    Route::get('/doOzv/{fee?}/{klub_id}/{league}/{group}',[\App\Http\Controllers\in\Profile::class,'doOzv'])->name('ozv');
    Route::get('/logout',[\App\Http\Controllers\Login::class,'flushSession'])->name('logout');
    Route::post('/forumSend',[\App\Http\Controllers\in\Forum::class,'do'])->name('forum2');
    Route::get('/joined',[\App\Http\Controllers\in\Profile::class,'joined'])->name('joined');
    Route::get('/kiarəş/{id?}',[\App\Http\Controllers\Kia::class,'base']);
    // Route::post('/home1',[\App\Http\Controllers\Total::class,'home'])->name('home');


    // Route::get('remove/product/{id}',[\App\Http\Controllers\front::class,'remove_product'])->name('remove.product');

});


    Route::get('/profile',[\App\Http\Controllers\in\Profile::class,'show'])->name('prof');
    Route::get('/stats',[\App\Http\Controllers\in\Statistics::class,'show'])->name('stats');
    Route::get('/users',[\App\Http\Controllers\in\Statistics::class,'showUser'])->name('statUser');
    Route::get('/kateqoriyalar',[\App\Http\Controllers\in\Club::class,'show'])->name('kateqory');


    Route::get('/pay',[\App\Http\Controllers\in\Premium::class,'show'])->name('pay');

    Route::get('/klublar/{id?}',[\App\Http\Controllers\in\Club::class,'showClub'])->name('club');
    Route::post('/shop',[\App\Http\Controllers\Shop::class,'zarinpal'])->name('shop');

    Route::any('/bank/response', [\App\Http\Controllers\Shop::class, 'response']);
