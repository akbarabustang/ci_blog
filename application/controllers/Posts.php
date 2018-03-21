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
        $data['categories'] = $this->Posts_model->get_categories();

        if (empty($data['post'])) {
            show_404();
        }
        
        $data['title'] = $data['post']['title'];
        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create(){
        $data['title'] = 'Create Post';
        $data['categories'] = $this->Posts_model->get_categories();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
        if ($this->form_validation->run() ===FALSE) {
            $this->load->view('templates/header');
            $this->load->view('posts/create', $data);
            $this->load->view('templates/footer');    
        }else{
            //config for images
            $this->load->library('upload', $config);
            $config['upload_path'] = './assets/images/blog/'; 
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['max_size'] = '9999999';
            $config['max_width'] = '9999999';
            $config['max_height'] = '9999999';
            $config['encrypt_name'] = TRUE; 
            $this->upload->initialize($config);
            
            if ($this->upload->do_upload('postimage')) {
                $gbr = $this->upload->data();
                $config['image_library']='gd2';
	            $config['source_image']='./assets/images/blog/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            // $config['quality']= '60%';
	            $config['width']= 379;
	            $config['height']= 271;
	            $config['new_image']= './assets/images/blog/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
                $post_image = $gbr['file_name'];
            }else{
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.png';
            }
            $this->Posts_model->create_post($post_image);
            redirect('posts');
        }

        
    }
    
    public function delete($id){
        $this->Posts_model->delete_post($id);
        redirect('posts');
    }

    public function edit($slug){
        $data['post'] = $this->Posts_model->get_posts($slug);
        $data['categories'] = $this->Posts_model->get_categories();        

        if (empty($data['post'])) {
            show_404();
        }

        $data['title'] = 'Edit Post';
        $this->load->view('templates/header');
        $this->load->view('posts/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $this->Posts_model->update_post();
        redirect('posts');
    }

}
