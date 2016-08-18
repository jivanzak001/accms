<?php

class ConfigClass {

    function config_vars() {

        $ci =& get_instance();
		$ci->load->model('admin/Model_config');
		
		$config = $ci->Model_config->getAllConfigs();
		
		//echo "<pre>";
		//print_r($config);die;
		
		$base_url = $config['base_url'];
		$cookie_domain = $config['cookie_domain'];
		$cookie_path = $config['cookie_path'];
		
        $ci->config->set_item('base_url', $base_url);
		$ci->config->set_item('cookie_domain', $cookie_domain);
		$ci->config->set_item('cookie_path', $cookie_path);

    }

}
