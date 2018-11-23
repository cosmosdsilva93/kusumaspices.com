<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 	public function __construct(Request $request)
 	{
 		$this->request = $request;
 	}

 	public function comingSoon() 
 	{	
 		$data['title'] = 'Coming Soon';
 		return view('home.coming-soon', $data);
 	}

 	public function home() 
 	{	
 		$data['title'] = 'Home';
 		return view('home.index', $data);
 	}

 	public function contactUs()
 	{
 	    if ($this->request->all()) {           
 	        $postedData = $this->request->all();
 	        $request['name'] = trim(strip_tags($postedData['name']));
 	        $request['email'] = trim(strip_tags($postedData['email']));
 	        $request['query'] = trim(strip_tags($postedData['message']));
 	        
 	        $response['success'] = 1;
 	        $response['msg'] = 'We have received your query. We will get back to you shortly.';
 	        
 	        \Mail::send('email.contact-us', $request, function($message) use ($request) {
 	            $message->to('kusumaspices@gmail.com', 'Kusumas Spices')
 	                    ->subject('[kusumaspices.com] - Query by ' . $request['name']);
 	            $message->from($request['email'], $request['name']);
 	        });
 	        
 	        echo json_encode($response);
 	    }
 	}

 	public function products($category = '') 
 	{	
 		$data['title'] = 'Products';
 		$data['category'] = $category;
 		return view('home.products', $data);
 	}
}
