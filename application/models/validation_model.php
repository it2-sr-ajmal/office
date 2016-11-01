<?php

Class validation_model extends core_model {

    public function __construct() {
        parent::__construct();
    }
    
    public function stripTagsPostArray($post_arr = array()) {
        $temp_arr = array();
        if (count($post_arr)) {
            foreach ($post_arr AS $key => $value) {
                $temp_arr["$key"] = strip_tags($value);
            }
        }
        return $temp_arr;
    }

    public function escapeStringPostArray($post_arr = array()) {
        $temp_arr = array();
        if (count($post_arr)) {
            foreach ($post_arr AS $key => $value) {
                $temp_arr["$key"] = mysql_real_escape_string($value);
            }
        }
        return $temp_arr;
    }
    
   

}
