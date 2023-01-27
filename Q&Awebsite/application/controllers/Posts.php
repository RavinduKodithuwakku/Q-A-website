<?php
    class Posts extends CI_Controller{
        public function index(){
            $data['title'] = 'Latest Questions';
            $data['posts'] = $this->Post_model->get_posts();

            $this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
        }

        public function view($post_id = NULL){
			$data['post'] = $this->Post_model->get_posts($post_id);
			$data['answers'] = $this->Answers_model->get_answer($post_id);

			if(empty($data['post'])){
				show_404();
			}

			// $data['title'] = $data['post']['title'];

			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}

        public function user_post(){
			$data['posts'] = $this->Post_model->get_post_by_user();


			$this->load->view('templates/header');
			$this->load->view('pages/My_question', $data);
			$this->load->view('templates/footer');
		}


        public function create(){
			$data['title'] = 'Post Question';

            // form validation
            $this->form_validation->set_rules('title', 'title', 'required');
            $this->form_validation->set_rules('body', 'body', 'required');

            if($this->form_validation->run()=== FALSE){
                $this->load->view('templates/header');
                $this->load->view('posts/create', $data);
                $this->load->view('templates/footer');
            } else{
                $this->Post_model->create_post();
                redirect('posts');
            
            }         
        }     

        public function delete($id){
            $this->Post_model->delete_question($id);
            redirect('posts');
            

        }

        public function edit($id){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('Login');
			}

			$data['post'] = $this->Post_model->get_posts($id);


			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = 'Edit Post';

			$this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');
		}
	

        public function update(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('Login');
			}

			$this->Post_model->update_post();

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('posts');
		}
    }
