<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Core_Controller extends CI_Controller {

    public $COMPANY_NAME;                   //COMAPNY NAME
    public $HEADER_LANG;                    //COMMON LANGUAGE ARRAY FOR HEADER TEXTS
    public $SESS_STATUS;                    //SESS STATUS
    public $table_prefix;                   //TABLE PREFIX
    public $CURRENT_CTRL = NULL;            //CURRENT CONTROLLER CLASS
    public $CURRENT_MTD = NULL;             //CURRENT CONTROLLER METHOD
    public $LANG_ID;                        //CURRENT LANGUAGE ID
    public $LANG_NAME;                      //CURRENT LANGUAGE FOLDER NAME
    public $CURRENT_URL;                    //CURRENT URL 
    public $CURRENT_URL_FULL;               //CURRENT URL WITH URL ARGUEMENTS
    public $REDIRECT_URL_FULL;              //CURRENT URL WITH URL ARGUEMENTS
    public $IP_ADDR;                        //IP ADDRESS
    public $BASE_URL;                       //BASE URL
    public $RESOURCE_URL;                   //BASE URL
    public $NO_MODEL_CLASS_PAGES;           //PAGES THAT DOESN'T NEED MODEL CLASS
    public $VIEW_DATA_ARR = array();        //DATA ARRAY FOR VIEW FILES
    
    
    function __construct() {
        
        parent::__construct();

        $this->initialize_public_variables();

        $this->load_common_model_classes();
        
        $this->set_modules();
        //$this->authenticate();
        $controler_class = $this->router->class;

        $this->assign('controller', $controler_class);
        $this->assign('RESOURCE_PATH', RESOURCE_PATH);
        $this->assign('ROOT_PATH', ROOT_PATH);
        $this->assign('FILE_PATH', FCPATH);
        $this->assign('HEADER_PATH', FCPATH . "application/views/layout/header.tpl");
        $this->assign('FOOTER_PATH', FCPATH . "application/views/layout/footer.tpl");
        $this->assign('SIDE_MENU_PATH', FCPATH . "application/views/layout/side_menu.tpl");
        $this->assign('titile', 'Project Name');
        $this->assign('project_title', 'Project Name');
        $this->assign('project_name', 'Test');
        
        $this->load->model('common_model');
        $this->assign('PRIMARY_SCRIPTS', $this->common_model->primary_scripts);
        $this->assign('SECONDARY_SCRIPTS', $this->common_model->secondary_scripts);
        $this->assign('MENU_ARRAY', $this->common_model->getMenuarray());
        
        $this->auto_load_model_class();
    }
    
    function initialize_public_variables() {
        $this->SESS_STATUS = FALSE;
        $this->table_prefix = 'inf_';
        $this->CURRENT_CTRL = $this->router->class;
        $this->CURRENT_MTD = $this->router->method;
        $this->LANG_ID = 1;
        $this->LANG_NAME = 'english';
        $this->CURRENT_URL_FULL = $this->CURRENT_CTRL . "/" . $this->CURRENT_MTD;
        $this->REDIRECT_URL_FULL = $this->CURRENT_CTRL . "/" . $this->CURRENT_MTD;
        $this->CURRENT_URL = $this->CURRENT_CTRL . "/" . $this->CURRENT_MTD;
        $this->IP_ADDR = $this->input->server('REMOTE_ADDR');
        $this->BASE_URL = base_url();
        $this->RESOURCE_URL = $this->BASE_URL . "resources/";
        $this->NO_MODEL_CLASS_PAGES = array("product", "about_us");
    }
    
    function load_common_model_classes() {
        $this->load->model('login_model', '', TRUE);
        $this->load->model('validation_model', '', TRUE);
    }
    
    function set_modules() {
        $this->assign("LANG_STATUS", 'yes');
        $this->assign("HELP_STATUS", 'yes');
        $this->assign("STATCOUNTER_STATUS", 'yes');
        
    }
    
    function auto_load_model_class() {
        if (!in_array($this->CURRENT_CTRL, $this->NO_MODEL_CLASS_PAGES)) {
            $controler_class_model = $this->CURRENT_CTRL . "_model";
            $this->load->model($controler_class_model, '', TRUE);
        }
    }

    public function assign($var, $value) {
        //$this->smarty->assign($var, $value);
        $this->VIEW_DATA_ARR[$var] = $value;
    }
    
    public function autoLoadModel(){
        $controler_class = $this->router->class;
        $this->load->model("$controler_class"."_model");
    }
    
    public function show() {
        $this->load->model('common_model');
        $this->VIEW_DATA_ARR['PRIMARY_SCRIPTS'] = $this->common_model->primary_scripts;
        $this->VIEW_DATA_ARR['SECONDARY_SCRIPTS'] = $this->common_model->secondary_scripts;
        if($this->CURRENT_CTRL != 'register' && $this->CURRENT_CTRL != 'login'){
            if(isset($this->session->userdata['logged_in']['is_logged_in'])){
                $logged_user_type = $this->session->userdata['logged_in']['user_type'];
                $this->smarty->view($logged_user_type.'/'.$this->CURRENT_CTRL . '/' . $this->CURRENT_MTD . '.tpl', $this->VIEW_DATA_ARR);
            }else{
                $this->smarty->view($this->CURRENT_CTRL . '/' . $this->CURRENT_MTD . '.tpl', $this->VIEW_DATA_ARR); 
            }
        }else{
            $this->smarty->view($this->CURRENT_CTRL . '/' . $this->CURRENT_MTD . '.tpl', $this->VIEW_DATA_ARR); 
        }
    }

    public function authenticate() {
        $controler_class = $this->router->class;
        if ($controler_class != "login") {
            $flag = false;
            $logged_status = $this->session->userdata('logged_status');
            if ($logged_status == 'true') {
                $flag = true;
            } else {
                $flag = false;
            }

            if ($flag == FALSE) {
                redirect('login');
            }
        }
    }
    
    function redirect($msg, $page, $message_type = false, $MSG_ARR = array()) {

        $MSG_ARR["MESSAGE"]["DETAIL"] = $msg;
        $MSG_ARR["MESSAGE"]["TYPE"] = $message_type;
        $MSG_ARR["MESSAGE"]["STATUS"] = true;
        $this->session->set_flashdata('MSG_ARR', $MSG_ARR);
        $path = base_url() . $page;
        redirect("$path", 'refresh');

        exit();
    }
    
    
    function set_flash_message() {
        $FLASH_ARR_MSG = $this->session->flashdata('MSG_ARR');
        if (isset($FLASH_ARR_MSG)) {
            $this->assign("MESSAGE_DETAILS", $FLASH_ARR_MSG["MESSAGE"]["DETAIL"]);
            $this->assign("MESSAGE_TYPE", $FLASH_ARR_MSG["MESSAGE"]["TYPE"]);
            $this->assign("MESSAGE_STATUS", $FLASH_ARR_MSG["MESSAGE"]["STATUS"]);
        } else {
            $this->assign("MESSAGE_STATUS", FALSE);
        }
    }
    
    function set_website_information() {
        $this->load->model('validation_model', '', TRUE);
        $site_info = $this->validation_model->getSiteInformation();
        $this->COMPANY_NAME = $site_info['company_name'];
        $this->assign("site_info", $site_info);
    }

}
