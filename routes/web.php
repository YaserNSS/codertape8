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

//Working in Roures
Route::get('/', function () {
    return view('welcome');
});


// Route::get('contact', function () {
//     return view('contact');
// });

// Route::get('about', function () {
//     return view('about');
// });

Route::view('contact', 'contact');
Route::view('about', 'about');

Route::get('customers', function () {
    $customers = [
        'John Doe',
        'Jane Doe',
        'Bob The Builder'
    ];
    return view('internals.customers',compact('customers'));
});
