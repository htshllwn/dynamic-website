<?php
    class Institutions extends CI_Controller{

        //View All Institutions
        public function index(){
            //echo "All Institutions";

            $data['institutions'] = $this->institutions_model->get_institutions();

            $this->load->view('templates/header');
            $this->load->view('institutions/all',$data);
            $this->load->view('templates/footer');
        }

        //Create New or Edit previous Institution
        public function new_edit_ins($id = NULL){

            if($id !== NULL){
                $data['mode'] = 'edit';
                $data['ins_id'] = $id;
                $data['institution'] = $this->institutions_model->get_institution($id);
            }
            else{
                $data['mode'] = 'new';
            }

            $this->form_validation->set_rules('name','Institution Name','required');

            if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('institutions/new',$data);
				$this->load->view('templates/footer');	
			}
			else{

                $dataInsert = array(
                    'institution_name' => $this->input->post('name'),
                    'institution_add' => $this->input->post('add'),
                    'institution_phone1' => $this->input->post('phone1'),
                    'institution_phone2' => $this->input->post('phone2'),
                    'institution_email' => $this->input->post('email')
                    );
                
                if($id != NULL){
                    $this->institutions_model->edit_institution($id, $dataInsert);
                }
                else {
                    $this->institutions_model->register_institution($dataInsert);
                }
                
                redirect('institutions');
            }
        }

        //Delete a institution
		public function delete_institution($id){
			$this->institutions_model->delete_institution($id);
			redirect('institutions');
		}

    }