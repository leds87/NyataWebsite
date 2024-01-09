<?php

use App\Http\Controllers\admindata_controller;
use App\Http\Controllers\childrendata_controller;
use App\Http\Controllers\dashboard_controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\NyataController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\schooldata_controller;
use App\Http\Controllers\userdata_controller;
use App\Models\admindata;
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

Route::get('/donationdetail', function () {
    return view('donationdetail');
})->name('donationdetail');

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

Route::get('/detailschool', function () {
    return view('detailschool');
})->name('detailschool');


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


Route::get('/adminpage', [dashboard_controller::class, 'index']);

Route::get('/inputuser', function () { return view('adminpage.inputuser'); })->name('inputuser');
Route::post('/inputusers', [userdata_controller::class, 'store']);
Route::delete('/destroyuser/{id}',[userdata_controller::class,'destroy'])->name('destroyuser');
Route::get('/useredit/{id}/edit',[userdata_controller::class,'edit'])->name('useredit');
Route::put('/useredit/{id}',[userdata_controller::class,'update']);
Route::get('/usershow', [userdata_controller::class, 'showdata']);

Route::get('/inputadmin', function () { return view('adminpage.inputadmin'); })->name('inputadmin');
Route::post('/inputadmin', [admindata_controller::class, 'store']);
Route::delete('/destroyadmin/{id}',[admindata_controller::class,'destroy'])->name('destroyadmin');
Route::get('/adminedit/{id}/edit',[admindata_controller::class,'edit'])->name('adminedit');
Route::put('/adminedit/{id}',[admindata_controller::class,'update']);
Route::get('/adminshow', [admindata_controller::class, 'showdata']);

Route::get('/inputschool', function () { return view('adminpage.inputschool'); })->name('inputschool');
Route::post('/inputschool', [schooldata_controller::class, 'store']);
Route::delete('/destroyschool/{id}',[schooldata_controller::class,'destroy'])->name('destroyschool');
Route::get('/schooledit/{id}/edit',[schooldata_controller::class,'edit'])->name('schooledit');
Route::put('/schooledit/{id}',[schooldata_controller::class,'update']);
Route::get('/schoolshow', [schooldata_controller::class, 'showdata']);


Route::get('/inputchildren', function () { return view('adminpage.inputchildren'); })->name('inputchildren');
Route::post('/inputchildren', [childrendata_controller::class, 'store']);
Route::delete('/destroychildren/{id}',[childrendata_controller::class,'destroy'])->name('destroychildren');
Route::get('/childrenedit/{id}/edit',[childrendata_controller::class,'edit'])->name('childrenedit');
Route::put('/childrenedit/{id}',[childrendata_controller::class,'update']);
Route::get('/childrenshow', [childrendata_controller::class, 'showdata']);


Route::get('/school', function () {
    return view('adminpage.school');
})->name('school');
Route::get('/children', function () {
    return view('adminpage.children');
})->name('children');



Route::get('/log', function () {
    return view('adminpage.log');
})->name('log');

Route::get('/welcome', function () {
    return view('welcome');
});
