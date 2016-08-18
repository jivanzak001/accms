<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
	* @Project 		: ACCMS v1 Build 201608 
	* @author 		: Projekt Händler GmbH
	* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
	* @Developer 	: WK160815-00 
	* @Date 		: 16-08-2016 (Tuesday)
	* @Time 		: 18:00 
	* @Function 	: app
	* @Task 		: create custom view loader class,
**/  

class App {
	
	/**
		* @Project 		: ACCMS v1 Build 201608 
		* @author 		: Projekt Händler GmbH
		* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
		* @Developer 	: WK160815-00 
		* @Date 		: 16-08-2016 (Tuesday)
		* @Time 		: 18:00 
		* @Function 	: display
		* @Task 		: create custom view loader with header and footer included,
	**/  
	
	function display($page,$vars = array(),$config = array()){
		
		//get ci instance
		$ci = get_instance();
		
		//load ci parser lib
		$ci->load->library('parser');
		
		//load the view and save it into a var
		$view = $ci->load->view($page,$vars,true);
		
		
		//create empty css and js vars
		$js = '';
		$css = '';
		
		//check if app_js key exists in config then run a foreach loop and create script tags and save it into js var
		if (array_key_exists('app_js', $config) && is_array($config['app_js']) && !empty($config['app_js'])) {
		    foreach ($config['app_js'] as $k => $v) {
		    	$js .= '<script src="'.base_url().'assets/'.$v.'"></script>';
		    }
		}
		
		//check if app_css key exists in config then run a foreach loop and create stylesheet tags and save it into css var
		if (array_key_exists('app_css', $config) && is_array($config['app_css']) && !empty($config['app_css'])) {
		    foreach ($config['app_css'] as $k => $v) {
		    	$css .= '<link href="'.base_url().'assets/css/'.$v.'" rel="stylesheet">';
		    }
		}
		
		//check if app_title key exists in config and save it in title var
		if (array_key_exists('app_title', $config)) {
		    $title = $config['app_title'];
		}else{
			$title = '';
		}
		
		//put css and title in a new array and parse the header file
		//the parser will convert {app_css} and {app_title} into css tags and title respectively
		$header_data = array(
			'app_css'		=>	$css,
			'app_title'			=>	$title
		);
		$header = $ci->parser->parse('components/header',$header_data,true);
		
		//put js in a new array and parse the footer file
		//the parser will convert {app_js} into js tags
		$footer_data = array(
			'app_js'		=>	$js
		);
		$footer = $ci->parser->parse('components/footer',$footer_data,true);
		
		
		//put header, footer and content in a new array and parse into index file to load the complete view
		$data = array(
		        'app_header'   	=>	$header,
				'app_content'	=>	$view,
				'app_footer'	=>	$footer,
		);

		$ci->parser->parse('index', $data);
		
	}

	/**
		* @Project 		: ACCMS v1 Build 201608 
		* @author 		: Projekt Händler GmbH
		* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
		* @Developer 	: KS160815-00 
		* @Date 		: 17-08-2016 (Wednesday)
		* @Time 		: 11:27 
		* @Function 	: is_superadmin
		* @Task 		: check super admin is login ?
	**/

	function is_superadmin($redirect = true)
	{
		$ci = get_instance();
		if(!$ci->session->userdata("superAdmin")){
			if(!$redirect) return false;

			redirect("/accms");
		}

		return true;
	}

	/**
		* @Project 		: ACCMS v1 Build 201608 
		* @author 		: Projekt Händler GmbH
		* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
		* @Developer 	: KS160815-00 
		* @Date 		: 17-08-2016 (Wednesday)
		* @Time 		: 11:48 
		* @Function 	: displaySuperAdmin
		* @Task 		: template for supermenu
	**/  

	function displaySuperAdmin($page,$vars = array(),$config = array()){
		
		//get ci instance
		$ci = get_instance();
		
		//load ci parser lib
		$ci->load->library('parser');
		
		//load the view and save it into a var
		$view = $ci->load->view($page,$vars,true);
		
		
		//create empty css and js vars
		$js = '';
		$css = '';
		
		//check if app_js key exists in config then run a foreach loop and create script tags and save it into js var
		if (array_key_exists('app_js', $config) && is_array($config['app_js']) && !empty($config['app_js'])) {
		    foreach ($config['app_js'] as $k => $v) {
		    	$js .= '<script src="'.base_url().'assets/'.$v.'"></script>';
		    }
		}
		
		//check if app_css key exists in config then run a foreach loop and create stylesheet tags and save it into css var
		if (array_key_exists('app_css', $config) && is_array($config['app_css']) && !empty($config['app_css'])) {
		    foreach ($config['app_css'] as $k => $v) {
		    	$css .= '<link href="'.base_url().'assets/'.$v.'" rel="stylesheet">';
		    }
		}
		
		//check if app_title key exists in config and save it in title var
		if (array_key_exists('app_title', $config)) {
		    $title = $config['app_title'];
		}else{
			$title = '';
		}
		
		//put css and title in a new array and parse the header file
		//the parser will convert {app_css} and {app_title} into css tags and title respectively

		$header_data = array(
			'app_css'		=>	$css,
			'app_title'			=>	$title
		);

		$loginId = 0;
		
		if($this->is_superadmin(false)){
			$loginId = $ci->session->userdata("superAdmin")['id'];
			$header_data ['adminType'] = 'Super Admin';
		}
		if($this->is_admin(false)){
			$loginId = $ci->session->userdata("admin")['id'];
			$header_data ['adminType'] = 'Admin';
		}

		$loginData = $ci->db->select("profile_picture,first_name,last_name")->where("id",$loginId)->get("admin_login");
		$header_data ['profile_picture'] = '';
		$header_data ['name'] = $loginData->row()->first_name ." ". $loginData->row()->last_name;

    	if(is_file("assets/profile_picture/".$loginData->row()->profile_picture)){
    		$header_data['profile_picture'] = base_url(). "assets/profile_picture/".$loginData->row()->profile_picture;
    	}

		$header = $ci->parser->parse('admin/components/header',$header_data,true);
		
		//put js in a new array and parse the footer file
		//the parser will convert {app_js} into js tags
		$footer_data = array(
			'app_js'		=>	$js
		);
		$footer = $ci->parser->parse('admin/components/footer',$footer_data,true);
		
		
		//put header, footer and content in a new array and parse into index file to load the complete view
		$data = array(
		        'app_header'   	=>	$header,
				'app_content'	=>	$view,
				'app_footer'	=>	$footer,
		);

		$ci->parser->parse('index', $data);
		
	}

	/**
		* @Project 		: ACCMS v1 Build 201608 
		* @author 		: Projekt Händler GmbH
		* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
		* @Developer 	: KS160815-00 
		* @Date 		: 17-08-2016 (Wednesday)
		* @Time 		: 15:26 
		* @Function 	: is_admin
		* @Task 		: check admin is login or not
	**/  

	function is_admin($redirect = true)
	{
		$ci = get_instance();
		if(!$ci->session->userdata("admin")){
			if(!$redirect) return false;

			redirect("/accms");
		}

		return true;
	}
	
}