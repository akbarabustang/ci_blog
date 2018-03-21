<?php

class Posts_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_posts($slug = FALSE){
        if ($slug === FALSE) {
           return $query = $this->db->get('tbl_posts')->result_array();
        }
        return $query = $this->db->get_where('tbl_posts', array('slug'=>$slug))->row_array();
    }
}
