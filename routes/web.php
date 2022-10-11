<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () { return view('home'); });
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dessert-safaris', function (){
    return view('dessert-safaris');
});
Route::get('/detail', function (){
    return view('detail');
});
Route::get('/cart', function (){
    return view('cart');
});
Route::get('/popular-attractions', function (){
    return view('popular-attractions');
});
Route::get('/explore-now', function (){
    return view('explore-now');
});
Route::get('/sight-seeing', function (){
    return view('sight-seeing');
});
Route::get('/sight-seeing-inner', function (){
    return view('sight-seeing-inner');
});
Route::get('/special-offers', function (){
    return view('special-offers');
});
Route::get('/events', function (){
    return view('events');
});
Route::get('/our-partners', function (){
    return view('our-partners');
});
Route::get('/explore-partner', function (){
    return view('explore-partner');
});
Route::get('/view-activity', function (){
    return view('view-activity');
});
Route::get('/about-us', function (){
    return view('about-us');
});
Route::get('/contact-us', function (){
    return view('contact-us');
});
Route::get('/gallery', function (){
    return view('gallery');
});
Route::get('/help', function (){
    return view('help');
});
Route::post('/contact', [HomeController::class, 'contact_submit'])->name('contact.submit');
Route::post('/newsletter', [HomeController::class, 'newsletter'])->name('newsletter.submit');
