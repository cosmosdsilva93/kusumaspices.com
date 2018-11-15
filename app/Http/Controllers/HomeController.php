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

 	public function demo() 
 	{	
 		$data['title'] = 'Demo';
 		return view('home.demo', $data);
 	}

 	public function contactUs()
 	{
 	    if ($this->request->all()) {           
 	        $postedData = $this->request->all();
 	        $request['name'] = trim(strip_tags($postedData['name']));
 	        $request['email'] = trim(strip_tags($postedData['email']));
 	        $request['message'] = trim(strip_tags($postedData['message']));
 	        // $response = $this->home->saveMessage($request);
 	        $data = array();
 	        $recepients['name'] = 'Kusumas Spices';
 	        $recepients['email'] = 'kusumaspices@gmail.com';
 	        $response['success'] = 1;
 	        $response['msg'] = 'We have received your query. We will get back to you shortly.';
 	        
 	        // \Mail::send('test', $data, function($message) use ($recepients) {
 	        //     $message->to($recepients['email'], $recepients['name'])
 	        //             ->subject('[kusumaspices.com] - Query by ' . $request['name']);
 	        //     $message->from($request['email'], $request['name']);
 	        // });
 	        echo json_encode($response);
 	    }
 	}
}
