<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function index(){

        $data['title'] = 'Latest Post';
        $data['posts'] = $this->Posts_model->get_posts();
        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug = NULL){
        $data['post'] = $this->Posts_model->get_posts($slug);

        if (empty($data['post'])) {
            show_404();
        }

        $data['title'] = $data['post']['title'];
        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
	}
}
