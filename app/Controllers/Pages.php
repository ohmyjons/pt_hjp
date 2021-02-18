<?php 

namespace App\Controllers;

class Pages extends BaseController
{
	public function beranda()
	{
		$data = [
			'title' => 'Beranda | PT HJP'
		];
        // return view('welcome_message');
        // echo "Hello world!";
		echo view('layout/header', $data);
		echo view('pages/beranda');
		echo view('layout/footer');

		
	}

	public function Profil()
	{

		$data = [
			'title' => 'Profil | PT HJP'
		];		
		echo view('layout/header', $data);
		echo view('pages/profil');
		echo view('layout/footer');
		
	}

	//--------------------------------------------------------------------

}
