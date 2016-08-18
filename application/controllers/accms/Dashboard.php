<?php
/**
	* @Project 		: ACCMS v1 Build 201608 
	* @author 		: Projekt Händler GmbH
	* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
	* @Developer 	: KS160815-00  
	* @Date 		: 16-08-2016 (Tuesday)
	* @Time 		: 16:17 
	* @Function 	: index
	* @Task 		: create a controller,
**/  

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		$data = array();
		 
		$config = array(
			'app_js'	=>	array(),
			'app_css'	=>	array(),
			'app_title'	=>	'Dashboard'
		);
		
		$this->app->displaySuperAdmin('dashboard',$data,$config);
	}
}