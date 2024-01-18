<?php

use App\Http\Controllers\admindata_controller;
use App\Http\Controllers\adminlog_controller;
use App\Http\Controllers\childrendata_controller;
use App\Http\Controllers\childrennotsupported_controller;
use App\Http\Controllers\childrensupported_controller;
use App\Http\Controllers\dashboard_controller;
use App\Http\Controllers\dashboarduser_controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\NyataController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\news_controller;
use App\Http\Controllers\schooldata_controller;
use App\Http\Controllers\userdata_controller;
use App\Models\admindata;
use App\Models\news;
use App\Models\userdata;
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


Route::get('/adminpage', [dashboard_controller::class, 'index'])->middleware('auth:web,admin'); //:user

Route::get('/userpage', [dashboarduser_controller::class, 'index'])->middleware('auth:web,admin');
Route::post('/childrensupportedfilter',[childrensupported_controller::class,'filter'])->name('childrensupported.filter')->middleware('auth:web,admin');
Route::get('/childrensupported', [childrensupported_controller::class, 'index'])->middleware('auth:web,admin')->name('childrensupported');
Route::get('/childrennotsupported', [childrennotsupported_controller::class, 'index'])->middleware('auth:web,admin')->name('childrennotsupported');

Route::get('/profile', [admindata_controller::class, 'showprofile'])->middleware('auth:web,admin');


Route::get('/news', [news_controller::class, 'index'])->middleware('auth:web,admin');
// Route::get('/inputnews', function () { return view('adminpage.inputnews'); })->name('inputnews')->middleware('auth:web,admin');
Route::get('/inputnews', [news_controller::class, 'showchildrenid'])->middleware('auth:web,admin');
Route::post('/inputnews', [news_controller::class, 'store'])->middleware('auth:web,admin');
Route::delete('/destroynews/{id}',[news_controller::class,'destroy'])->name('destroynews')->middleware('auth:web,admin');
Route::get('/newsedit/{id}/edit',[news_controller::class,'edit'])->name('newsedit')->middleware('auth:web,admin');
Route::put('/newsedit/{id}',[news_controller::class,'update'])->middleware('auth:web,admin');
Route::get('/newsshow/{title}', [news_controller::class, 'show'])->middleware('auth:web,admin');

Route::get('/inputuser', function () { return view('adminpage.inputuser'); })->name('inputuser');
Route::post('/inputusers', [userdata_controller::class, 'store'])->middleware('auth:web,admin');
Route::delete('/destroyuser/{id}',[userdata_controller::class,'destroy'])->name('destroyuser')->middleware('auth:web,admin');
Route::get('/useredit/{id}/edit',[userdata_controller::class,'edit'])->name('useredit');
Route::put('/useredit/{id}',[userdata_controller::class,'update'])->middleware('auth:web,admin');
Route::get('/usershow', [userdata_controller::class, 'showdata'])->middleware('auth:web,admin');

Route::get('/inputadmin', function () { return view('adminpage.inputadmin'); })->name('inputadmin');
Route::post('/inputadmin', [admindata_controller::class, 'store'])->middleware('auth:web,admin');
Route::delete('/destroyadmin/{id}',[admindata_controller::class,'destroy'])->name('destroyadmin');
Route::get('/adminedit/{id}/edit',[admindata_controller::class,'edit'])->name('adminedit');
Route::put('/adminedit/{id}',[admindata_controller::class,'update'])->middleware('auth:web,admin');
Route::get('/adminshow', [admindata_controller::class, 'showdata'])->name('adminshow')->middleware('auth:admin');

Route::get('/inputschool', function () { return view('adminpage.inputschool'); })->name('inputschool');
Route::post('/inputschool', [schooldata_controller::class, 'store'])->middleware('auth:web,admin');
Route::delete('/destroyschool/{id}',[schooldata_controller::class,'destroy'])->name('destroyschool')->middleware('auth:web,admin');
Route::get('/schooledit/{id}/edit',[schooldata_controller::class,'edit'])->name('schooledit');
Route::put('/schooledit/{id}',[schooldata_controller::class,'update'])->middleware('auth:web,admin');
Route::get('/schoolshow', [schooldata_controller::class, 'showdata'])->middleware('auth:web,admin');


Route::get('/inputchildren', function () { return view('adminpage.inputchildren'); })->name('inputchildren');
Route::post('/inputchildren', [childrendata_controller::class, 'store'])->middleware('auth:web,admin');
Route::delete('/childrendestroy/{id}',[childrendata_controller::class,'destroy'])->name('childrendestroy')->middleware('auth:web,admin');
Route::get('/childrenedit/{id}/edit',[childrendata_controller::class,'edit'])->name('childrenedit');
Route::put('/childrenedit/{id}',[childrendata_controller::class,'update'])->middleware('auth:web,admin');
Route::get('/childrenshow', [childrendata_controller::class, 'showdata'])->middleware('auth:web,admin');


Route::get('/nyataadmin',[admindata_controller::class, 'index']);
Route::post('/nyataadmin',[admindata_controller::class, 'login'])->name('login');
Route::post('/logout',[admindata_controller::class, 'logout']);

Route::get('/log', [LogController::class, 'index'])->name('log')->middleware('auth:web,admin');
Route::get('/adminlog', [adminlog_controller::class, 'index'])->name('adminlog')->middleware('auth:web,admin');


// // User authentication routes
// Route::get('/loginuser', [userdata::class, 'index'])->name('loginuser'); // Display login form
// Route::post('/loginuser', [userdata::class, 'login']); // Handle login form submission
// Route::post('/logoutuser', [userdata::class, 'logout'])->name('logoutuser'); // Handle logout




Route::get('/school', function () {
    return view('adminpage.school');
})->name('school');
Route::get('/children', function () {
    return view('adminpage.children');
})->name('children');



// Route::get('/log', function () {
//     return view('adminpage.log');
// })->name('log');

Route::get('/welcome', function () {
    return view('welcome');
});
