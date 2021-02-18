<?php 

namespace App\Controllers;

class Pages extends BaseController
{
	public function home()
	{
        // return view('welcome_message');
        // echo "Hello world!";
		return view('pages/home');

		
	}

	public function about()
	{
		
		return view('pages/about');
		
	}

	//--------------------------------------------------------------------

}
