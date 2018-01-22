<?php
    class Institutions extends CI_Controller{

        //View All Institutions
        public function index(){
            //echo "All Institutions";

            $data['institutions'] = $this->institutions_model->get_institutions();

            $this->load->view('templates/header');
            $this->load->view('templates/footer');
        }

    }