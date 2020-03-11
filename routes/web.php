<?php

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
    return view('master'); // return view('welcome');
});

Route::get('/contact-us', 'ContactController@create')->name('contact');

Route::post('/contact-us', 'ContactController@store');

Route::get('/about-us', function () {
    return view('aboutus');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/emails/contact-us', function() {
    return new App\Mail\ContactSubmitted(App\Contact::find(1));
});
