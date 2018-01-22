<?php
    class Institutions_model extends CI_Model{

        public function __construct(){
            //Load Database
            $this->load->database();
        }

        //Get All Institutions
        public function get_institutions(){
            $query = $this->db->get('institutions');
            return $query->result();
        }

    }