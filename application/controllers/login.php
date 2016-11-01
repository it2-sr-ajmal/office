<?php

require_once 'admin/Main_Controller.php';

class login extends Main_controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        
        $is_logged_in = $this->checkSession();
        if ($is_logged_in) {
            $this->redirect("", 'admin/home', true);
        }
        $this->assign('name', 'fazlu');
        $this->show();
    }
    
    function validate_login() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|strip_tags|xss_clean|min_length[3]|max_length[30]|htmlentities');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|strip_tags|xss_clean|min_length[5]|max_length[30]|callback_check_database');
        $login = $this->form_validation->run();
        if ($login) {
            $this->redirect("", "admin/home", true);
        } else {
            $this->redirect("Invalid Username or Password", 'login', false);
        }
    }
    
    function check_database($password) {
        $flag = false;

        $login_details = $this->input->post();
        $login_details = $this->validation_model->stripTagsPostArray($login_details);
        $login_details = $this->validation_model->escapeStringPostArray($login_details);

        $username = $login_details['username'];
        $password = $login_details['password'];

        $login_result = $this->login_model->login($username, $password);

        if ($login_result) {
            $this->login_model->setUserSessionDatas($login_result);
            $flag = true;
        } else {
            $flag = false;
        }

        return $flag;
    }
    

}
