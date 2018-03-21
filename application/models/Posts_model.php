<?php

class Posts_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_posts($slug = FALSE){
        if ($slug === FALSE) {
            $this->db->order_by('id', 'DESC');
            return $query = $this->db->get('tbl_posts')->result_array();
        }
        return $query = $this->db->get_where('tbl_posts', array('slug'=>$slug))->row_array();
    }

    public function create_post(){
        $slug = url_title($this->input->post('title'));

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body')
        );
        return $this->db->insert('tbl_posts', $data);
    }

    public function delete_post($id){
        $this->db->where('id', $id);
        $this->db->delete('tbl_posts');
        return true;
        
    }

    public function update_post(){
        $slug = url_title($this->input->post('title'));

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body')
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_posts', $data);
        
        
    }
}
