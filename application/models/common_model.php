<?php

Class common_model extends CI_Model {

    public $primary_scripts;
    public $secondary_scripts;

    public function __construct() {

        parent::__construct();

        $this->primary_scripts = array();
        $this->secondary_scripts = array();

        $this->loadPrimaryScripts();
        $this->loadSecondaryScripts();
    }

    public function loadPrimaryScripts() {

        //js
        $data['script'][] = 'jquery.min';
        $data['script'][] = 'nprogress';

        //css
        $data['style'][] = 'animate.min';
        $data['style'][] = 'maps/jquery-jvectormap-2.0.1.min';
        $data['style'][] = 'icheck/flat/green';
        $data['style'][] = 'floatexamples';

        $this->primary_scripts = $data;
    }

    public function loadSecondaryScripts() {
        $data = array();
        $url = $this->router->fetch_class() . '/' . $this->router->fetch_method();
        switch ($url) {
            case "login/index":
                //js
                $data['title'] = 'Login';
                $data['script'][] = 'index-login';
                $data['style'][] = 'style-login';
                
                break;
            case "home/index":
                $data['title'] = 'fghfghfgh';
                $data['script'][] = 'test';
                $data['style'][] = 'animate.min';
                break;
            case "register/index":
                $data['title'] = 'Register';
                $data['script'][] = 'test';
                $data['style'][] = 'animate.min';
                break;
        }
        $this->secondary_scripts = $data;
    }
    
    public function getMenuarray()
    {
        $menu_data=array();
        
        $main_menu_array=  $this->getMainmenuarray();
        $i=0;
        $k=0;
        foreach ($main_menu_array as $menu)
        {
            $submenu_details=array();
            $menu_data[$i]['id']=$menu['id'];
            $menu_data[$i]['url']=$menu['url'];
            $menu_data[$i]['target']=$menu['target'];
            $menu_data[$i]['status']=$menu['status'];
            $menu_data[$i]['title']=$menu['title'];
            $menu_data[$i]['icon']=$menu['icon'];
            $submenu_details=$this->getSubMenuArray($menu['id']);
            foreach ($submenu_details as $submenu)
            {
               $menu_data[$i]['submenu'][]=$submenu; 
            }
            $i=$i+1;
        }
      //  print_r($menu_data);//die();
        return $menu_data;
    }
    public function getMainmenuarray()
    {       
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('status','yes');
        $qry=$this->db->get();
        return $qry->result_array(); 
    }
    public function getSubMenuArray($menu_id)
    {       
        $this->db->select('*');
        $this->db->from('sub_menu');
        $this->db->where('menu_id',$menu_id);
        $this->db->where('status','yes');
        $qry=$this->db->get();
        return $qry->result_array(); 
    }

}
