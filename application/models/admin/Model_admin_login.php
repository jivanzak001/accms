<?php
/**
   * @Project           : KS-T1608
   * @author            : Projekt Händler GmbH
   * @copyright         : Copyright (c) 1990 - 2016, Projekt Händler GmbH
   * @Developer         : KS160815-00
   * @Date              : 16-08-2016 (Tuesday)
   * @Time              : 16:16
   * @Function          : login 
   * @Task              : create login with md5
**/

class Model_admin_login extends CI_Model {

   public function __construct()
   {
      parent::__construct();
   }

   public function login($username,$password)
   {
      $this->load->library('encrypt');
      $password =  md5($password);


      $adminData = $this->db
         -> select('id,email,admin_type')
         -> where('email', $username)
         -> where('password', $password)
         -> where('status', 1)
         -> limit(1)
         -> get('admin_login');

        

      if($adminData->num_rows()){

         if($adminData->row()->admin_type == 1){
            $sessionData = array(
               'superAdmin' => array(
                  'id'           => $adminData->row()->id,
                  'email'        => $adminData->row()->email,
                  'admin_type'   => $adminData->row()->admin_type,
               )
            );
         }
         else
         {
            $sessionData = array(
               'admin' => array(
                  'id'           => $adminData->row()->id,
                  'email'        => $adminData->row()->email,
                  'admin_type'   => $adminData->row()->admin_type,
               )
            );
         }

         $this->session->set_userdata($sessionData);

         $this->db->where('id', $adminData->row()->id);
         $this->db->update('admin_login', array( 'last_login' => date("Y-m-d H:i:s") ));

         return $adminData->row()->id;
      }
      else
      {
         return false;
      }
   }
}