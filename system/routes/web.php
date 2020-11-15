<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;



// Auth
Route::get('/login',[AuthController:: class, 'showLogin']);
Route::get('/logout',[AuthController:: class, 'logout']);
Route::get('/signup',[AuthController:: class, 'Registration']);



// User
Route::get('/',[UserController:: class, 'showIndex']);
Route::get('/index',[UserController:: class, 'showIndex']);
Route::get('/detail',[UserController:: class, 'showDetail']);
Route::get('detail/{detail}',[UserController:: class, 'showDetail']);






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
// edit data
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