<?php
    class PostModel extends CI_Model
    {
        public function _construct()
        {
            $this->load->database();
        }

        public function getPost($slug = FALSE)
        {
            if($slug === FALSE)
            {
                $this->db->order_by('post_id', 'DESC');
                $query = $this->db->get('posts');   
                return $query->result_array();
            }

            $query = $this->db->get_where('posts',array('slug' => $slug));
            return $query->row_array();

        }
        public function create_post(){
            $slug = url_title($this->input->post('title'));

            $data = array(
                'title' => $this->input->post('title'),
                'body'  =>  $this->input->post('body'),
                'slug'  =>  $slug
            );

            return $this->db->insert('posts',$data);
        }

        public function delete_post($postid){
            $this->db->where('post_id', $postid);
            $this->db->delete('posts');
            return true;
        }

        public function update_post()
        {
            //echo $this->input->post('postid');

            $slug = url_title($this->input->post('title')); 

            $data = array (
                'title' => $this->input->post('title'),
                'body'  => $this->input->post('body'),
                'slug'  => $slug
            );
            $this->db->where('post_id', $this->input->post('postid'));
            return $this->db->update('posts',$data);
        }
    }
?>