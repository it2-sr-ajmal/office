<?php

Class core_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();

        $this->loadScripts();
    }

    public function loadScripts(){
        $this->load->model('common_model');
    }
    

}
