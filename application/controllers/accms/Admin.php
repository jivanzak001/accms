<?php
/**
	* @Project 		: ACCMS v1 Build 201608 
	* @author 		: Projekt Händler GmbH
	* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
	* @Developer 	: KS160815-00  
	* @Date 		: 16-08-2016 (Tuesday)
	* @Time 		: 16:17 
	* @Function 	: index,delete,create,email_exist,username_exist
	* @Task 		: create a controller,
**/  

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $error = false;

	function __construct()
	{
		parent::__construct();
		$this->app->is_superadmin();
		$this->lang->load('admin/admin','english');
		$this->load->model("admin/model_admin_admin");
	}

	public function index(){
		
		$data = array();
		
		$config = array(
			'app_js'	=>	array(),
			'app_css'	=>	array(),
			'app_title'	=>	'Manage Admin'
		);
		
		$adminFilter = array("admin_type"=>2);
		$data['list'] = $this->model_admin_admin->getList($adminFilter);

		$this->app->displaySuperAdmin('admin/admin_list',$data,$config);	
	}

	public function delete($adminId){
		$this->model_admin_admin->delete($adminId);
		redirect("accms/admin");
	}

	public function edit($editId = 0){
		$data = array();

		if($this->input->method() == 'post' && $this->validate()){
			$updateData = $this->input->post();
			$error = true;
			if( $_FILES['profile_picture']['name'] != '' ){

				$config['upload_path']          = 'assets/profile_picture/';
	            $config['file_ext_tolower']     = true;
	            $config['file_name']     		= md5(uniqid(rand(), true));
	            $config['allowed_types']        = 'gif|jpg|png';
	            $config['max_size']             = 100;
	            $config['max_width']            = 1000;
	            $config['max_height']           = 1000;

	            $this->load->library('upload', $config);
	            $error = $this->upload->do_upload('profile_picture');
	            if ( $error )
	            {
	            	$updateData['profile_picture'] = $this->upload->data()['file_name'];
	            }
	        }
	       
            if (! $error )
            {
                $this->error['error_profile_picture'] = $this->upload->display_errors();
            }
            else
            {
				if($this->model_admin_admin->update($updateData))
				{
					redirect("accms/admin");
				}
				else
				{
					$this->error['warning'] = $this->lang->line("error_warning");
				}
            }
		}
		
		$config = array(
			'app_js'	=>	array(
				'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js',
				'global/plugins/bower_components/bootstrap-fileupload/js/bootstrap-fileupload.min.js',
				'admin/js/pages/blankon.form.layout.js',
			),
			'app_css'	=>	array(
				'global/plugins/bower_components/chosen_v1.2.0/chosen.min.css',
				'global/plugins/bower_components/bootstrap-fileupload/css/bootstrap-fileupload.min.css',
			),
			'app_title'	=>	'Manage Admin'
		);

		if($this->error){
			$data = array_merge($data,$this->error);
		}

		$language = array(
			'error_profile_picture',
			'error_first_name',
			'error_last_name',
			'error_username',
			'error_email',
			'error_password',
			'error_pin',
			'input_profile_picture',
			'input_first_name',
			'input_last_name',
			'input_username',
			'input_email',
			'input_password',
			'input_pin',
			'input_save',
			'input_change',
			'input_back',
			'input_status',
			'input_enable',
			'input_disable',
		);

		if(isset($_POST['id']))
		{
			$editId = (int)$_POST['id'];
		}
		if($editId > 0){
			$adminFilter = array("id"=>$editId);
			$adminDetail = $this->model_admin_admin->getList($adminFilter);
			if($adminDetail){
				$data['admin'] = $adminDetail[0];
			}
		}

		foreach ($language as  $key) {
			$data['lang'][$key] = $this->lang->line($key);
		}

		$this->app->displaySuperAdmin('admin/admin_form',$data,$config);	
	}

	private function validate(){
		
	    if(trim($this->input->post('first_name')) == '')
	    {
	    	$this->error['error_first_name'] = $this->lang->line("error_first_name");
	    }
	    if(trim($this->input->post('last_name')) == '')
	    {
	    	$this->error['error_last_name'] = $this->lang->line("error_last_name");
	    }
	    if(trim($this->input->post('username')) == '')
	    {
	    	$this->error['error_username'] = $this->lang->line("error_username");
	    }
	    else if($this->model_admin_admin->username_exist($this->input->post('username'), @$_POST['id'] ))
	    {
	    	$this->error['error_username'] = $this->lang->line("error_username_exist");
	    }

	    if(trim($this->input->post('email')) == '')
	    {
	    	$this->error['error_email'] = $this->lang->line("error_email");
	    }
	    else if($this->model_admin_admin->email_exist($this->input->post('email'), @$_POST['id'] ))
	    {
	    	$this->error['error_email'] = $this->lang->line("error_email_exist");
	    }

	    if(trim($this->input->post('password')) == '' && !isset($_POST['id']))
	    {
	    	$this->error['error_password'] = $this->lang->line("error_password");
	    }
	    if(trim($this->input->post('pin')) == '')
	    {
	    	$this->error['error_pin'] = $this->lang->line("error_pin");
	    }

	    return !$this->error;
	}
}