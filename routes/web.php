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
    return view('home');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/prodList', function () {
    return view('prodList');
});
Route::get('/newsPage', function () {
    return view('newsPage');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/oneNew', function () {
    return view('oneNew');
});
Route::get('/aboutUs', function () {
    return view('aboutUs');
});