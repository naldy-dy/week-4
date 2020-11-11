<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{


	function showBeranda(){
		return view('beranda')
	}

	function showProduk(){
		return view('produk-admin')
	}

	function showJual(){
		return view('jual-produk')
	}

	function showKategoriadmin(){
		return view('kategori-admin')
	}

	function showLogin(){
		return view('login')
	}
	function showSignup(){
		return view('signup')
	}
}