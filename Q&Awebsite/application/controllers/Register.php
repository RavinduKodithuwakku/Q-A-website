<?php
    class Register extends CI_Controller{

        public function userRegister(){


            // Register form validation
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

            if ($this->form_validation->run() == FALSE){                   
                    $this->load->view('templates/header');
                    $this->load->view('pages/Register');
                    $this->load->view('templates/footer');
            }
            else{
                $this->load->model('User_model');
                // $this->user_modeld->userdataInsert();
                            
                $response = $this->User_model->userdataInsert();
                if($response){
                    $this->session->set_flashdata('message','You are Registerd Successfully....!    Now Please Login :) <a href="http://localhost/Q&Awebsite/Login">Login</a>' );
                    redirect('Register_view');
                }else{
                    $this->session->set_flashdata('errormessage', "Something went wrong.... Please try again :( ");
                    redirect('Register');
                }
            }

          
        }
    }

