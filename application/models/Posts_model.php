<?php

class Posts_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_posts($slug = FALSE){
        if ($slug === FALSE) {
            $this->db->order_by('tbl_posts.id', 'DESC');
            $this->db->join('tbl_categories', 'tbl_categories.id = tbl_posts.category_id');
            return  $this->db->get('tbl_posts')->result_array();
        }
        $this->db->join('tbl_categories', 'tbl_categories.id = tbl_posts.category_id');
        return $this->db->get_where('tbl_posts', array('slug'=>$slug))->row_array();
    }

    public function create_post($post_image){
        $slug = url_title($this->input->post('title'));

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body'),
            'post_image' => $post_image,
            'category_id' => $this->input->post('category_id')
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
        $id = $this->input->post('id');
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body'),
            'category_id' => $this->input->post('category_id')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_posts', $data);
        
        
    }

    public function get_categories(){
        $this->db->order_by('name');
        return $this->db->get('tbl_categories')->result_array();
        
        
    }
}
