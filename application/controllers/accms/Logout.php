<?php
/**
	* @Project 		: ACCMS v1 Build 201608 
	* @author 		: Projekt Händler GmbH
	* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
	* @Developer 	: KS160815-00 
	* @Date 		: 17-08-2016 (Wednesday)
	* @Time 		: 15:37 
	* @Function 	: index
	* @Task 		: logout admin
**/  


defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	private $error = false;

	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->session->unset_userdata('superAdmin');
		$this->session->unset_userdata('admin');
		redirect("/accms");
	}
}