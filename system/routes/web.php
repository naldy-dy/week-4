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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/base', function () {
    return view('/base');
});

Route::get('/template', function () {
    return view('template.base');
});




// admin
Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/produk-admin', function () {
    return view('produk-admin');
});

Route::get('/jual-produk', function () {
    return view('jual-produk');
});
Route::get('/histori-penjualan', function () {
    return view('histori-penjualan');
});
