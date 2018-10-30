<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 	public function comingSoon() 
 	{	
 		$data['title'] = 'Coming Soon';
 		return view('home.coming-soon', $data);
 	}

 	public function demo() 
 	{	
 		$data['title'] = 'Demo';
 		return view('home.demo', $data);
 	}
}
