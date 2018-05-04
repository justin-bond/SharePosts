<?php
	/**
	* 
	*/
	class Pages extends Controller
	{
	
		public function __construct(){
			
		}

		public function index(){
			$data = [
				'title' => 'SharePosts',
				'description' => 'Simple social network built on the simple MVC PHP Framework',
			];
			
			$this->view('pages/index', $data);
		}

		public function about(){
			$data = [
				'title' => 'About Us',
				'description' => 'App to share posts with other users',
			];

			$this->view('pages/about', $data);
		}
	}