<?php
    class Posts extends CI_Controller
    {
        public function index ()
        {

            $data['posts'] = $this->PostModel->getPost();

            //print_r($data['posts']);

            $this->load->view('includes/header');
            $this->load->view('pages/posts/posts',$data);
            $this->load->view('includes/footer');
        }

        public function viewSlug($slug = NULL)
        {
            $data['post'] = $this->PostModel->getPost($slug);
            if(empty($data['post']))
            {
                show_404();
            }

            $data['title'] = $slug;
            $this->load->view('includes/header');
            $this->load->view('pages/posts/view',$data);
            $this->load->view('includes/footer');
        }

        public function createPost()
        {
            $data['title'] = "Create Post";

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('body','Body', 'required');
            $this->load->view('includes/header');
            if($this->form_validation->run() === FALSE)
            {
                
                $this->load->view('pages/posts/create',$data);
                
            }else{
                $this->PostModel->create_post();
                redirect('posts');
            }
            $this->load->view('includes/footer');
        }

        public function delete($postid){

            $this->PostModel->delete_post($postid);
            redirect('posts');
        }

        public function edit($slug)
        {
            $data['post'] = $this->PostModel->getPost($slug);
            if(empty($data['post']))
            {
                show_404();
            }

            $data['title'] = $slug;
            $this->load->view('includes/header');
            $this->load->view('pages/posts/edit',$data);
            $this->load->view('includes/footer');
        }

        public function update(){
            $this->PostModel->update_post();
            redirect('posts');
        }
    }
?>