<?php 

namespace App\Http\Controllers;
use App\Models\kategori;
use App\Models\produk;
 


 class UserController extends Controller{

 	function showIndex(){
 		$data['list_produk'] = produk::all();
 		$data['list_kategori'] = kategori::all();
 		return view('index', $data);
 	}
 	function showDetail(Produk $produk){
 		$data['list_produk'] = produk::all();
 		return view('detail', $data);
 	}

 }