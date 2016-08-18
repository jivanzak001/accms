<?php
/**
 * @Project 		: ACCMS v1 Build 201608
 * @author 		: Projekt Händler GmbH
 * @copyright 	: Copyright (c) 1990 - 2016, Projekt Händler GmbH
 * @Developer 	: KS160815-00
 * @Date 		: 16-08-2016 (Tuesday)
 * @Time 		: 16:17
 * @Function 	: index
 * @Task 		: create a controller,
 **/

defined('BASEPATH') OR exit('No direct script access allowed');

class Multilingual extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->app->is_superadmin();
        $this->lang->load('admin/admin','english');
        $this->load->model("multilingual_model");
    }
    public function index()
    {
        $data = array();

        $config = array(
            'app_js'	=>	array(),
            'app_css'	=>	array(),
            'app_title'	=>	'Manage Admin'
        );
        $language = array(
            'error_profile_picture',
            'error_first_name',
            'error_last_name',
            'error_username',
            'error_email',
            'error_password',
            'error_pin',
            'language_name',
            'input_first_name',
            'input_last_name',
            'language_ios_code',
            'default',
            'input_password',
            'input_pin',
            'input_save',
            'input_change',
            'input_back',
            'input_status',
            'input_enable',
            'input_disable',
        );
        foreach ($language as  $key) {
            $data['lang'][$key] = $this->lang->line($key);
        }
        $data['list'] = $this->multilingual_model->getList();
        $this->app->displaySuperAdmin('admin/multilingual_list',$data,$config);
    }
    public function create()
    {
        $data = array();

        $config = array(
            'app_js'	=>	array(
                'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js',
                'global/plugins/bower_components/bootstrap-fileupload/js/bootstrap-fileupload.min.js',
                'admin/js/pages/blankon.form.layout.js',
            ),
            'app_css'	=>	array(
                'global/plugins/bower_components/chosen_v1.2.0/chosen.min.css',
                'global/plugins/bower_components/bootstrap-fileupload/css/bootstrap-fileupload.min.css',
            ),
            'app_title'	=>	'Manage Admin'
        );
        $language = array(
            'error_profile_picture',
            'error_first_name',
            'error_last_name',
            'error_username',
            'error_email',
            'error_password',
            'error_pin',
            'language_name',
            'input_first_name',
            'input_last_name',
            'language_ios_code',
            'default',
            'input_password',
            'input_pin',
            'input_save',
            'input_change',
            'input_back',
            'input_status',
            'input_enable',
            'input_disable',
        );
        foreach ($language as  $key) {
            $data['lang'][$key] = $this->lang->line($key);
        }
        $data['action'] = 'add';
        $this->app->displaySuperAdmin('admin/multilingual_form',$data,$config);
    }

    public function add()
    {
        $data = $_POST;
        $this->multilingual_model->add($data);
            redirect("accms/multilingual/");

    }

    public function delete($id)
    {
        $this->multilingual_model->delete($id);
        redirect("accms/multilingual/");
    }
    public function edit($id)
    {
        $config = array(
            'app_js'	=>	array(
                'global/plugins/bower_components/chosen_v1.2.0/chosen.jquery.min.js',
                'global/plugins/bower_components/bootstrap-fileupload/js/bootstrap-fileupload.min.js',
                'admin/js/pages/blankon.form.layout.js',
            ),
            'app_css'	=>	array(
                'global/plugins/bower_components/chosen_v1.2.0/chosen.min.css',
                'global/plugins/bower_components/bootstrap-fileupload/css/bootstrap-fileupload.min.css',
            ),
            'app_title'	=>	'Manage Admin'
        );
        $language = array(
            'error_profile_picture',
            'error_first_name',
            'error_last_name',
            'error_username',
            'error_email',
            'error_password',
            'error_pin',
            'language_name',
            'input_first_name',
            'input_last_name',
            'language_ios_code',
            'default',
            'input_password',
            'input_pin',
            'input_save',
            'input_change',
            'input_back',
            'input_status',
            'input_enable',
            'input_disable',
        );
        foreach ($language as  $key) {
            $data['lang'][$key] = $this->lang->line($key);
        }
        $data['action'] = 'update';
        $data['admin'] =  $this->multilingual_model->getOne($id);
        $data['admin'] = $data['admin'][0];
        $this->app->displaySuperAdmin('admin/multilingual_form',$data,$config);
    }
    public function update(){
        if (isset($_POST['id'])){
               $data = $_POST;
               $this->multilingual_model->update($data);
               redirect("accms/multilingual/");
        }
    }


}