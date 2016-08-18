<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @Project : ACCMS
 * @author : CP-T1608
 * @copyright Copyright (c) 1990 - 2016, ACCMS
 * @Developer : CP-T1608
 * @Date : 16 Augest,2016
 * @Time : 15:00
 * @File name : UserStaffModule.php
 * @Task : This file used to create for handling the user staff module, 
			where we will register new member for the system.
 */
 
class User_staff_module extends CI_Controller {
	
	/**
	 * @Project 	: ACCMS
	 * @author		: CP-T1608
	 * @copyright Copyright (c) 1990 - 2016, ACCMS
	 * @Developer 	: CP-T1608
	 * @Date 		: 16 Augest,2016
	 * @Time 	 	: 15:00
	 * @Function name : index
	 * @Task		: This function is used to load staff_type view file
	 */ 
	public function create(){
		/*reading the notification id by segment*/
		$segment = $this->uri->segment(3);
		#loading the require model
		$this->load->model('Access_model', 'obj_ca', TRUE);
		
		//$data['staff_type_list'] = $this->obj_ca->get_staff_type_detail_staff_type_id($segment);
		
		#config setting 
		$config = array(
			'app_title'	=>	'User Staff Module'
		);
		
		$this->app->display('user_module/user_staff_module', $config);
	}
	
	/*====================================================*/
	/**
	 * @Project 	: ACCMS v1 Build 201608
	 * @author		: CP-T1608
	 * @copyright Copyright (c) 1990 - 2016, ACCMS
	 * @Developer 	: CP-T1608
	 * @Date 		: 16 Augest,2016
	 * @Time 	 	: 15:00
	 * @Function name : update_staff_module
	 * @Task		: This function is used to update staff modules value in database.
	 */ 
	public function update_staff_module(){
		//array to store ajax responses
        $arr_response = array('status' => ERR_DEFAULT); /* 500 */
		
		if($this->input->is_ajax_request()){			
			#loading the require model
			$this->load->model('User_staff_module_model', 'obj_re', TRUE);
			
			#calling the function to register a new user into the database
			$return_value = $this->obj_re->update_staff_module();
			
			if ($return_value) {
				$arr_response['status'] = SUCCESS; /* 200 */
				$arr_response['message'] = 'Staff module has beed added successfully';
			} else {
				$arr_response['status'] = DB_ERROR; /* 201 */
				$arr_response['message'] = 'Something went Wrong! Please try again';
			}
		}else{
			$arr_response['status'] = DB_ERROR; /* 201 */
			$arr_response['message'] = 'Unauthorized access.';
		}
        echo json_encode($arr_response);
	}
	
	
}