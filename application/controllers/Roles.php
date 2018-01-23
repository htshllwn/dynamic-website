<?php
    class Roles extends CI_Controller{

        //View All roles
        public function index(){
            //echo "All roles";

            $data['roles'] = $this->roles_model->get_roles();

            $this->load->view('templates/header');
            $this->load->view('roles/all',$data);
            $this->load->view('templates/footer');
        }

        //Create New or Edit previous role
        public function new_edit_role($id = NULL){

            if($id !== NULL){
                $data['mode'] = 'edit';
                $data['role_id'] = $id;
                $data['role'] = $this->roles_model->get_role($id);
            }
            else{
                $data['mode'] = 'new';
            }

            $this->form_validation->set_rules('name','Role Name','required');

            if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('roles/new',$data);
				$this->load->view('templates/footer');	
			}
			else{

                $datainsert = array(
                    'role_name' => $this->input->post('name'),
                    'role_des' => $this->input->post('des')
                    );
                
                if($id != NULL){
                    $this->roles_model->edit_role($id, $datainsert);
                }
                else {
                    $this->roles_model->register_role($datainsert);
                }
                
                redirect('roles');
            }
        }

        //Delete a role
		public function delete_role($id){
			$this->roles_model->delete_role($id);
			redirect('roles');
		}
    }