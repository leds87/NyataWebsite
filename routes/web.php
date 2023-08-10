<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\NyataController;
use App\Http\Controllers\LanguageController;
use Illuminate\Console\View\Components\Alert;

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
    return view('index');
})->name('home');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/ourpeople', function () {
    return view('ourpeople');
})->name('ourpeople');

Route::get('/whatwedo', function () {
    return view('whatwedo');
})->name('whatwedo');

Route::get('/adikasuh', function () {
    return view('adikasuh');
})->name('adikasuh');

Route::get('/travelcharity', function () {
    return view('travelcharity');
})->name('travelcharity');

Route::get('/actofkindness', function () {
    return view('actofkindness');
})->name('actofkindness');

Route::get('/takeaction', function () {
    return view('takeaction');
})->name('takeaction');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');


Route::get('/products', [NyataController::class, 'index']);
Route::get('/products/about', [NyataController::class, 'about']);
Route::get('/products/{id}', [NyataController::class, 'show']);

Route::get('language/{locale?}', function ($locale) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        //echo ('not working ' . $locale);
    }
    return redirect()->back();
});

Route::get('/welcome', function () {
    return view('welcome');
});
