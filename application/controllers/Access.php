<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @Project : ACCMS
 * @author : CP-T1608
 * @copyright Copyright (c) 1990 - 2016, ACCMS
 * @Developer : CP-T1608
 * @Date : 16 Augest,2016
 * @Time : 15:00
 * @File name : Access.php
 * @Task : This file used to create for handling the user access relateded task
 */
 
class Access extends CI_Controller {
	
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
	public function index(){
		/*reading the notification id by segment*/
		$segment = $this->uri->segment(3);
		#loading the require model
		$this->load->model('Access_model', 'obj_ca', TRUE);
		
		$data['staff_type_list'] = $this->obj_ca->get_staff_type_detail_staff_type_id($segment);
		
		#config setting 
		$config = array(
			'app_title'	=>	'Set Staff Type'
		);

		//$this->load->view('components/header', $config);
		$this->app->display('access/staff_type',$data, $config);
		//$this->load->view('components/footer');
	}
	
	/*====================================================*/
	/**
	 * @Project 	: ACCMS v1 Build 201608
	 * @author		: CP-T1608
	 * @copyright Copyright (c) 1990 - 2016, ACCMS
	 * @Developer 	: CP-T1608
	 * @Date 		: 16 Augest,2016
	 * @Time 	 	: 15:00
	 * @Function name : update_staff_type
	 * @Task		: This function is used to update staff type value in database.
	 */ 
	public function update_staff_type(){
		//array to store ajax responses
        $arr_response = array('status' => ERR_DEFAULT); /* 500 */
		
		if($this->input->is_ajax_request()){			
			#loading the require model
			$this->load->model('Access_model', 'obj_re', TRUE);
			
			#calling the function to register a new user into the database
			$return_value = $this->obj_re->update_staff_type();
			
			if ($return_value) {
				$arr_response['status'] = SUCCESS; /* 200 */
				$arr_response['message'] = 'Staff type has beed added successfully';
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
	
	/*====================================================*/
	/**
	 * @Project 	: ACCMS v1 Build 201608
	 * @author		: CP-T1608
	 * @copyright Copyright (c) 1990 - 2016, ACCMS
	 * @Developer 	: CP-T1608
	 * @Date 		: 16 Augest,2016
	 * @Time 	 	: 15:00
	 * @Function name : index
	 * @Task		: This function is used to load lsit of all staff_type 
	 */ 
	public function view_staff_type(){
		#loading the require model
		$this->load->model('Access_model', 'obj_ca', TRUE);
		
		$data['staff_type_list'] = $this->obj_ca->get_list_of_all_staff_type();
		
		#config setting 
		$config = array(
			'app_title'	=>	'View Staff Type List'
		);
		
		//$this->load->view('components/header');
		$this->load->view('access/view_staff_type',$data);
		//$this->load->view('components/footer');
	}
	/*====================================================*/
	/**
	 * @Project 	: ACCMS v1 Build 201608
	 * @author		: CP-T1608
	 * @copyright Copyright (c) 1990 - 2016, ACCMS
	 * @Developer 	: CP-T1608
	 * @Date 		: 16 Augest,2016
	 * @Time 	 	: 15:00
	 * @Function name : index
	 * @Task		: This function is used to remove staff type by staff_type
	 */ 
	public function remove_staff_type(){
		if($this->input->is_ajax_request()){	
			#loading the require model
			$this->load->model('Access_model', 'obj_ca', TRUE);
			
			$return_value = $this->obj_ca->remove_staff_type();
			
			if ($return_value) {
				$arr_response['status'] = SUCCESS; /* 200 */
				$arr_response['message'] = 'Staff type has beed removed successfully';
			} else {
				$arr_response['status'] = DB_ERROR; /* 201 */
				$arr_response['message'] = 'Something went Wrong! Please try again';
			}
		} else {
			$arr_response['status'] = DB_ERROR; /* 201 */
			$arr_response['message'] = 'Something went Wrong! Please try again';
		}
        echo json_encode($arr_response);
		
	}
}