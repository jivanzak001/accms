<?php

class Model_config extends CI_Model {
	
	private $tbl = 'site_config';

   public function __construct(){
      parent::__construct();
   }
   
   function getAllConfigs(){
	   $result = $this->db
					->get($this->tbl)
					->result_array();
	   
	   $data = array();
	   
	   foreach ($result as $k => $v) {
		   $data[$v['config_name']] = $v['config_value'];
	   }

					if(empty($data)){
						return false;
					}else{
						return $data;
					}
   }
   
   function getConfig($name){
	   $result = $this->db
				   	->where('config_name',$name)
					->get($this->tbl)
					->row_array();

					if(empty($result)){
						return false;
					}else{
						return $result['config_value'];
					}
   }

}