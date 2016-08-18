<?php  if (!defined('BASEPATH')) exit('Not A Valid Request');

class Access_model extends CI_Model {

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
	 * @Function name : update_staff_type
	 * @Task		: This function is used to update staff type value in database.
	 */ 
	public function update_staff_type(){
		if($_POST['staff_type_id'] == 0){
			#inser new entry
			$data = array(
				'staff_type_name' => $_POST['staff_type_name'],
				'staff_type_desc' => $_POST['staff_type_desc'],
				'staff_type_level' => $_POST['staff_type_level'],
				'staff_type_min_level' => $_POST['staff_type_min_level'],
				'staff_type_max_level' => $_POST['staff_type_max_level'],
				'creation_access' => $_POST['creation_access'],
				'created_date' => date('Y-m-d'),
				'created_time' => date('H:m:s'),
			);
			$result = $this->db->insert('admin_staff_type', $data);
			if($result){
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			#need to update existing data
			$data = array(
				'staff_type_name' => $_POST['staff_type_name'],
				'staff_type_desc' => $_POST['staff_type_desc'],
				'staff_type_level' => $_POST['staff_type_level'],
				'staff_type_min_level' => $_POST['staff_type_min_level'],
				'staff_type_max_level' => $_POST['staff_type_max_level'],
				'creation_access' => $_POST['creation_access'],
			);
			$result = $this->db->update('admin_staff_type', $data,array('staff_type_id' => $_POST['staff_type_id']));
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
