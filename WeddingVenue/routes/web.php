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
    return view('WeddingVenue.indexx');
});
Route::get('/login', function () {
    return view('WeddingVenue.login');
});
Route::get('/signin', function () {
    return view('WeddingVenue.signin');
});
Route::get('/about', function () {
    return view('WeddingVenue.about');
});
Route::get('/contact', function () {
    return view('WeddingVenue.contact');
});
Route::get('/hall-single', function () {
    return view('WeddingVenue.hall-single');
});
Route::get('/confirmation', function () {
    return view('WeddingVenue.confirmation');
});
Route::get('/halls', function () {
    return view('WeddingVenue.halls');
});
Route::get('/booking', function () {
    return view('WeddingVenue.booking');
});

