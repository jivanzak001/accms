<?php  if (!defined('BASEPATH')) exit('Not A Valid Request');

class User_staff_module_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->helper('string');
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
	 * @Task		: This function is used to get list of all staff type.
	 */ 
	public function get_list_of_all_staff_type(){
		$db_result = $this->db->get_where('admin_staff_type', array('staff_type_status' => 'active'));
        if ($db_result && $db_result->num_rows() > 0) {
            $data = array();
            $data_value = array();
            foreach ($db_result->result() as $row) {
                
				if (!array_key_exists($row->staff_type_id, $data)) {
                    $data[$row->staff_type_id] = array();
                }
                if (array_key_exists($row->staff_type_id, $data)) {
                    $data[$row->staff_type_id] = array(
                        'staff_type_id' => $row->staff_type_id,
						'staff_type_name'=> $row->staff_type_name,
						'staff_type_desc'=> $row->staff_type_desc,
						'staff_type_status'=> $row->staff_type_status,
						'staff_type_level'=> $row->staff_type_level,
						'staff_type_min_level'=> $row->staff_type_min_level,
						'staff_type_max_level'=> $row->staff_type_max_level,
						'created_date'=> $row->created_date,
						'creation_access'=> $row->creation_access,
                    );
                    array_push($data_value, $data[$row->staff_type_id]);
                }
            }
            return $data_value;
        } else {
            return FALSE;
        }
		
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
	 * @Task		: This function is used to get list of all staff type.
	 */ 
	public function get_staff_type_detail_staff_type_id($segment){
		$db_result = $this->db->get_where('admin_staff_type', array('staff_type_status' => 'active','staff_type_id' => $segment));
        if ($db_result && $db_result->num_rows() > 0) {
            $data = array();
            $data_value = array();
            foreach ($db_result->result() as $row) {
                
				if (!array_key_exists($row->staff_type_id, $data)) {
                    $data[$row->staff_type_id] = array();
                }
                if (array_key_exists($row->staff_type_id, $data)) {
                    $data[$row->staff_type_id] = array(
                        'staff_type_id' => $row->staff_type_id,
						'staff_type_name'=> $row->staff_type_name,
						'staff_type_desc'=> $row->staff_type_desc,
						'staff_type_status'=> $row->staff_type_status,
						'staff_type_level'=> $row->staff_type_level,
						'staff_type_min_level'=> $row->staff_type_min_level,
						'staff_type_max_level'=> $row->staff_type_max_level,
						'created_date'=> $row->created_date,
						'creation_access'=> $row->creation_access,
                    );
                    array_push($data_value, $data[$row->staff_type_id]);
                }
            }
            return $data_value;
        } else {
            return FALSE;
        }
		
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
		
		$this->db->trans_begin();
		/* get last inserted data user base value*/
		
		$base1 = date('y').date('m');
		$base2 = date('d').date('H');
		$base3 = date('m').date('i');
		$user_base = $base1.$base2.$base3;
		
		/*get count on entery submitted in this second */
		$this->db->where(array("user_base", $user_base));
		$db_result0 = $this->db->get_where('admin_login');
		$db_count = ($db_result0->num_rows());
		
		$defult_num = (sprintf('%04u', (++$db_count)));		
		
		$user_id = $user_base.$defult_num;
		$user_html_id = $base1.'-'.$base2.'-'.$base3.'-'.$defult_num;
		
		$this->load->library('encrypt');
		$password =  md5($_POST['user_pass']);
	  
		if($_POST['user_id'] == 0){
			#inser new entry
			$data = array(
				'user_id' => (double)$user_id,
				'user_base' => (double)$user_base,
				'user_html_id' => $user_html_id,
				'user_name' => $_POST['user_name'],
				'email' => $_POST['user_email'],
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'password' => $password,
				'pincode' => $_POST['pincode'],
				'created_date' => date('Y-m-d').' '.date('H:m:s')
			);
			$result = $this->db->insert('admin_login', $data);
		}else{
			#need to update existing data
			$data = array(
				'user_name' => $_POST['user_name'],
				'email' => $_POST['user_email'],
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'pincode' => $_POST['pincode'],
			);
			$result = $this->db->update('admin_login', $data,array('id' => $_POST['user_id']));
		}
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return FALSE;
		} else{
			$this->db->trans_commit();
			return TRUE;
		}
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
	public function remove_staff_type(){
		
		$data = array(
            'staff_type_status' => 'inactive',
        );
        $result = $this->db->update('admin_staff_type', $data, array('staff_type_id' => $_POST['staff_type_id']));
        if ($this->db->affected_rows()) {
            return TRUE;
        } else {
            return FALSE;
        }
	}
	
	 
}
