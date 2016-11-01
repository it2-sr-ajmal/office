<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$current_dir = dirname(__FILE__);
$parent_dir = $current_dir.'/..';
require $parent_dir.'/Core_controller.php';

class agent_controller extends Core_controller {

    function index() {
        $this->assign('name','fazlu');
        $this->show();
    }

}
