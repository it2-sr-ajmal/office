<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'admin/Main_Controller.php';

class register extends Main_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->show();
    }
    
    public function register_submit() {
        if($this->validate_register()){
            $this->redirect("registration completed successfully", "register/index",TRUE);
        }else{
            $error = $this->form_validation->error_array();
            $this->assign('error', $error);
            $this->redirect("error occured please try again", "register/index", false);
        }
    }
    
    function validate_register() {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|strip_tags|xss_clean|min_length[3]|max_length[30]|htmlentities');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|strip_tags|xss_clean|min_length[5]|max_length[30]');
        $register = $this->form_validation->run();
        return $register;
    }

    

    
    

}
