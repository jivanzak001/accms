<?php
/**
	* @Project 		: ACCMS v1 Build 201608 
	* @author 		: Projekt Händler GmbH
	* @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
	* @Developer 	: KS160815-00 
	* @Date 		: 17-08-2016 (Wednesday)
	* @Time 		: 12:43 
	* @Function 	: 
	* @Task 		: 
**/  

class Model_admin_admin extends CI_Model {

   public function __construct()
   {
      parent::__construct();
   }

   public function getList($filter = array())
   {
        $returnData = false;

   		  $this->db-> select('*');
        //$this->db-> where('status', 1);

        if(isset($filter['admin_type'])){
        	$this->db-> where('admin_type', $filter['admin_type']);
        }

        if(isset($filter['id'])){
        	$this->db-> where('id', $filter['id']);
        }

        $adminList = $this->db-> get('admin_login');

        if($adminList->num_rows()){
	        foreach ($adminList->result_array() as $key => $value) {
	        	$profile_picture = '';
	        	if(is_file("assets/profile_picture/".$value['profile_picture'])){
	        		$profile_picture = base_url() ."assets/profile_picture/".$value['profile_picture'];
	        	}

	        	$returnData[] = array(
		        	'id'				=> $value['id'],
		            'username'			=> $value['username'],
		            'email'				=> $value['email'],
		            'password'			=> $value['password'],
		            'pin'				=> $value['pin'],
		            'first_name'		=> $value['first_name'],
		            'last_name'			=> $value['last_name'],
		            'dob'				=> $value['dob'],
		            'profile_picture'	=> $value['profile_picture'],
		            'profile_picture_link'	=> $profile_picture,
		            'admin_type'		=> $value['admin_type'],
		            'status'			=> $value['status'],
		            'last_login'		=> $value['last_login'],
		            'created_date'		=> $value['created_date'],
		        );
	        }
	    }

        return $returnData;
   }

   public function update($data)
   {
   		$adminData = array(
   			'first_name' => $data['first_name'],
		    'last_name' => $data['last_name'],
		    'username' 	=> $data['username'],
		    'email' 	=> $data['email'],
		    'pin' 		=> $data['pin'],
		    'status' 	=> $data['status'],
		    'admin_type' 	=> 2,
   		);

   		if(isset($data['profile_picture']))
   		{
   			$adminData['profile_picture'] = $data['profile_picture'];
   		}

   		if($data['password'] != '')
   		{
   			$adminData['password'] = md5($data['password']);
   		}

   		if(!isset($data['id']))
   		{
   			$adminData['created_date'] = date("Y-m-d H:i:s");
   			$this->db->insert('admin_login', $adminData);
   			return $this->db->insert_id();
   		}
   		else
   		{
   			$this->db->where("id",(int)$data['id']);
   			$this->db->update("admin_login",$adminData);
   			return $data['id'];
   		}
   }

   public function delete($adminId)
   {
   		$this->db->where('id', $adminId)
		 	 ->delete('admin_login');
   }

   public function email_exist($email,$adminId = 0)
   {
      $this->db->select('id')->where('email', $email);

      if($adminId > 0){
          $this->db->where('id != ', $adminId);
      }  
      $data = $this->db->get('admin_login');

      return $data->num_rows();
   }

   public function username_exist($username,$adminId = 0)
   {
      $this->db->select('id')->where('username', $username);

      if($adminId > 0){
          $this->db->where('id != ', $adminId);
      }  
      $data = $this->db->get('admin_login');

      return $data->num_rows();
   }

}