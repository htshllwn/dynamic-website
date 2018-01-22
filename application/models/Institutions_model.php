<?php
    class Institutions_model extends CI_Model{

        public function __construct(){
            //Load Database
            $this->load->database();
        }

        //Get All Institutions
        public function get_institutions(){
            $this->db->order_by('institution_name');
            $query = $this->db->get('institutions');
            return $query->result();
        }

        //Create New institution
		public function register_institution($data){
            foreach ($data as $index => $temp) {
				if($temp == ""){
					//echo $temp;
					$data[$index] = NULL;
					//echo $temp;
				}
			}
			$this->db->insert('institutions',$data);
		}

		//Edit institution
		public function edit_institution($ins_id, $data){
            foreach ($data as $index => $temp) {
				if($temp == ""){
					//echo $temp;
					$data[$index] = NULL;
					//echo $temp;
				}
			}
			$this->db->set($data);
			$this->db->where('id',$ins_id);
			$this->db->update('institutions');
		}

        //Get single Institution details
		public function get_institution($ins_id){
			$this->db->where('id',$ins_id);
			$query = $this->db->get('institutions');
			return $query->row();

			if($query->num_rows() == 1){
				return $query->row(0);
			}
			else{
				return false;
			}
        }

        //Delete institution
		public function delete_institution($ins_id){
			$query = $this->db->where('id',$ins_id);
			$query = $this->db->get('institutions');

			if($query->num_rows() == 1){
				$this->db->where('id',$ins_id);
				return $this->db->delete('institutions');
				//echo "deleted";
				
			}
			else{
				return 0;
			}
		}

    }