<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require 'agent_controller.php';

class home extends admin_controller {

    function index() {
        $this->assign('name','fazlu');
        $this->show();
    }

}
