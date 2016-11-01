<?php

require 'core_model.php';

Class login_model extends core_model {

    public function __construct() {

    }
    
    function login($username, $password) {

        if ($username && $password) {
            $this->db->select('user_name,password');
            $this->db->from('login_user');
            $this->db->where('user_name = ', $username);
            $this->db->where('password = ', MD5($password));
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 1) {

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    public function setUserSessionDatas($login_result) {
        $session = array();
            $session = array(
                'is_logged_in' => true,
                'user_type' => 'admin'
            );
        

        $this->session->set_userdata('logged_in', $session);
    }

}
