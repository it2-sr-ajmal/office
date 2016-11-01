<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require 'Main_Controller.php';

class home extends Main_Controller {

    function index() {

        $this->assign('name','fazlu');
        $this->show();
    }

}
