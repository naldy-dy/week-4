<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;



// Auth
Route::get('login',[AuthController:: class, 'showLogin']);
Route::post('login',[AuthController:: class, 'prosesLogin']);
Route::get('logout',[AuthController:: class, 'logout']);
Route::get('signup',[AuthController:: class, 'Registration']);





// User
Route::get('/',[IndexController:: class, 'showIndex']);
Route::get('/index',[IndexController:: class, 'showIndex']);
Route::get('/detail',[IndexController:: class, 'showDetail']);
Route::get('/detail/{detail}',[IndexController:: class, 'showDetail']);






// admin
Route::get('beranda', [HomeController:: class, 'showBeranda']);
Route::get('jual-produk', [HomeController:: class, 'showJual']);
Route::get('kategori', [HomeController:: class, 'showKategori']);





// produk
Route::get('produk',[ProdukController:: class, 'index']);
Route::post('produk',[ProdukController:: class, 'store']);
Route::get('create',[ProdukController:: class, 'create']);
Route::get('produk/{produk}', [ProdukController:: class,'show']);
Route::get('produk/{produk}/edit', [ProdukController:: class,'edit']);
Route::put('produk/{produk}', [ProdukController:: class,'update']);
Route::delete('produk/{produk}', [ProdukController:: class,'destroy']);





// Kategori
Route::get('kategori',[KategoriController:: class, 'index']);
Route::post('kategori',[KategoriController:: class, 'insertKategori']);
Route::get('kategori/create-kategori',[KategoriController:: class, 'createKategori']);
Route::get('kategori/{kategori}',[KategoriController:: class,'showKategori']);
Route::get('kategori/{kategori}/edit-kategori',[KategoriController:: class, 'editKategori']);
Route::put('kategori/{kategori}',[KategoriController:: class,'updateKategori']);
Route::delete('kategori/{kategori}',[KategoriController:: class,'destroyKategori']);


//user
Route::get('user',[UserController:: class, 'index']);
Route::post('user',[UserController:: class, 'store']);
Route::get('create',[UserController:: class, 'create']);
Route::get('user/{user}', [UserController:: class,'show']);
Route::get('user/{user}/edit', [UserController:: class,'edit']);
Route::put('user/{user}', [UserController:: class,'update']);
Route::delete('user/{user}', [UserController:: class,'destroy']);