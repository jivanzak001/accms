<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->app->is_superadmin();
		$this->lang->load('admin/config');
	}
	
	
	function index(){
		$this->load->model('Model_config');
		
		$data['config'] = $this->Model_config->getAllConfigs();
		$this->app->displaySuperAdmin('admin/config_form',$data);
	}
	
}

?>