<?php
    class Programs extends CI_Controller{

        //View All programs
        public function index(){
            //echo "All programs";

            $data['programs'] = $this->programs_model->get_programs();

            $this->load->view('templates/header');
            $this->load->view('programs/all',$data);
            $this->load->view('templates/footer');
        }

        //Create New or Edit previous program
        public function new_edit_program($id = NULL){

            if($id !== NULL){
                $data['mode'] = 'edit';
                $data['program_id'] = $id;
                $data['program'] = $this->programs_model->get_program($id);
            }
            else{
                $data['mode'] = 'new';
            }

            $this->form_validation->set_rules('name','Program Name','required');
            $this->form_validation->set_rules('start_date','Start Date','required');
            $this->form_validation->set_rules('end_date','End Date','required');

            if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('programs/new',$data);
				$this->load->view('templates/footer');	
			}
			else{

                $datainsert = array(
                    'program_name' => $this->input->post('name'),
                    'program_start_date' => $this->input->post('start_date'),
                    'program_end_date' => $this->input->post('end_date')
                    );
                
                if($id != NULL){
                    $this->programs_model->edit_program($id, $datainsert);
                }
                else {
                    $this->programs_model->register_program($datainsert);
                }
                
                redirect('programs');
            }
        }

        //Delete a program
		public function delete_program($id){
			$this->programs_model->delete_program($id);
			redirect('programs');
		}
    }