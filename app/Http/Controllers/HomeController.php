<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
	public function index(){
		return view('agent');
	}

	public function about(){
	
		return view('welcome');
	}

	public function agent(){
		
		return view('agent');
	}

}
