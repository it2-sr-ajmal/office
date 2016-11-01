<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'core/Core_Controller.php';

class Main_Controller extends Core_controller {

    function __construct() {

        parent::__construct();
       
        $this->set_flash_message();

    }
    
    function index() {
        $this->assign('name','fazlu');
        $this->show();
    }
    
    function checkSession() {
        $flag = isset($this->session->userdata['logged_in']) ? true : false;
        return $flag;
    }


}
