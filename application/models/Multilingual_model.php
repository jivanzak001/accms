<?php  if (!defined('BASEPATH')) exit('Not A Valid Request');

class Multilingual_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->helper('string');
    }
    public function add($data){

        $data = array(
            'language_name' => $data['language_name'],
            'language_ios_code' => $data['language_ios_code'],
            'default' => $data['default'],
            'status' => $data['status'],
        );
        $result = $this->db->insert('langauges', $data);
        if($result){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function getList(){
        $this->db->select('*');
        $query = $this->db->get('langauges');
        return $query->result_array();
    }
    public function delete($id)
    {
        $this->db->where('id', $id)
            ->delete('langauges');
    }
    public function getOne($id)
    {
        $this->db->select('*');
        $query = $this->db->where('id', $id)->get('langauges');
        return $query->result_array();
    }
    public function update($data){
        $data = array(
            'id'=>$data['id'],
            'language_name' => $data['language_name'],
            'language_ios_code' => $data['language_ios_code'],
            'default' => $data['default'],
            'status' => $data['status'],
        );
        $this->db->where('id', $data['id']);
        $this->db->update('langauges', $data);
    }
}
