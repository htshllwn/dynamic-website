<?php
    class Users extends CI_Controller{

        //View All Users
        public function index(){
            //echo "All Users";

            $data['users'] = $this->users_model->get_users();

            $this->load->view('templates/header');
            $this->load->view('users/all',$data);
            $this->load->view('templates/footer');
        }

        //Create New or Edit previous user
        public function new_edit_user($id = NULL){

            if($id !== NULL){
                $data['mode'] = 'edit';
                $data['user_id'] = $id;
                $data['user'] = $this->users_model->get_user($id);
            }
            else{
                $data['mode'] = 'new';
            }

            $this->form_validation->set_rules('full_name','Full Name','required');
            $this->form_validation->set_rules('age','Age','required');

            if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/new',$data);
				$this->load->view('templates/footer');	
			}
			else{

                $datainsert = array(
                    'user_full_name' => $this->input->post('full_name'),
                    'user_email' => $this->input->post('email'),
                    'user_age' => $this->input->post('age'),
                    'user_interests' => $this->input->post('interests'),
                    'user_education' => $this->input->post('education'),
                    'user_college' => $this->input->post('college')
                    );
                
                if($id != NULL){
                    $this->users_model->edit_user($id, $datainsert);
                }
                else {
                    $this->users_model->register_user($datainsert);
                }
                
                redirect('users');
            }
        }

        //Delete a user
		public function delete_user($id){
			$this->users_model->delete_user($id);
			redirect('users');
		}
    }