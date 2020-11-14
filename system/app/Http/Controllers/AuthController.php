<?php 

namespace App\Http\Controllers;

class AuthController extends Controller{


	function ShowLogin(){
		return view('login');
	}

	function ProssesLogin(){
		
	}
	
	function Logout(){
		return view('logout');
	}

	function Registration(){
		return view('signup');
	}

	function Forgot(){
		
	}
}