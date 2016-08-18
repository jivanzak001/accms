<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
	* @Project 		: ACCMS v1 Build 201608 
	* @author 		: Projekt Händler GmbH
	* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
	* @Developer 	: WK160815-00 
	* @Date 		: 16-08-2016 (Tuesday)
	* @Time 		: 18:00 
	* @Function 	: Dashboard
	* @Task 		: create dashboard controller
**/  

class Dashboard extends CI_Controller {

	/**
		* @Project 		: ACCMS v1 Build 201608 
		* @author 		: Projekt Händler GmbH
		* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
		* @Developer 	: WK160815-00 
		* @Date 		: 16-08-2016 (Tuesday)
		* @Time 		: 18:00 
		* @Function 	: index
		* @Task 		: load dashboard from a new view loader
	**/  
	
	public function index(){

		//following arrays are optional and just for demo for all of you
		$data = array(
			'mydata'	=>	'SOME DATA HERE'
		);
		
		//css file must be located under assets/css and js must be under assets/js
		$config = array(
			'app_js'	=>	array('myfile.js'),
			'app_css'	=>	array('myfile.css'),
			'app_title'	=>	'This is title of the page'
		);
		
		$this->app->display('dashboard',$data,$config);
		
		//OPTIONALLY WE CAN ONLY CALL display WITHOUT DATA AND CONFIG
		//$this->app->display('dashboard');
		
		//EASY! isnt it? :)
		
	}
}