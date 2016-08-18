<?php
/**
	* @Project 		: ACCMS v1 Build 201608
	* @author 		: Projekt Händler GmbH
	* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
	* @Developer 	: KS160815-00 
	* @Date 		: 16-08-2016 (Tuesday)
	* @Time 		: 16:17
	* @Function 	: index | validate
	* @Task 		: render a login page | validate a admin login |
**/

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $error = false;
	private $data = array();

	function __construct()
	{
		parent::__construct();
		$this->lang->load('admin/login','english');
	}

	public function index(){

		if($this->session->userdata("superAdmin")){
			redirect("accms/dashboard");
		}
		/*else if($this->session->userdata("admin")){
			redirect("accms/dashboard");
		}*/

		$language = array(
			'text_member_area',
			'text_username',
			'text_password',
			'text_remember',
			'text_lost_pass',
			'text_signin',
			'text_page_title',
		);

		foreach ($language as  $key) {
			$this->data['lang'][$key] = $this->lang->line($key);
		}

		if($this->input->method() == 'post' && $this->validate()){
			redirect("accms/dashboard");
		}

		if($this->error){
			$this->data['error'] = $this->error;
		}

		$this->load->view('admin/login',$this->data);
	}

	private function validate(){
		if(trim($this->input->post("username")) == '')
		{
			$this->error = $this->lang->line("error_username");
		}
		else if(trim($this->input->post("password")) == '')
		{
			$this->error = $this->lang->line("error_password");
		}
		else
		{
			$this->load->model("admin/model_admin_login");
			if($this->model_admin_login->login($this->input->post("username"),$this->input->post("password"))){
				return true;
			}
			else
			{
				$this->error = $this->lang->line('error_login');
			}
		}

		return false;
	}
}