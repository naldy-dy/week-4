<?php 

namespace App\Http\Controllers;

class UserController extends Controller{

	
	function showDetail(){
		return view('detail');
	}

	function showBase(){
		return view('base');
	}
	function showtemplate(){
		return view('template.base');
	}
	function showIndex(){
		return view('index');
	}

}
