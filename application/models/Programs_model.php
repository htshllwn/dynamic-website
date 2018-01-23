<?php
    class Programs_model extends CI_Model{

        public function __construct(){
            //Load Database
            $this->load->database();
        }

        //Get All programs
        public function get_programs(){
            $this->db->order_by('program_name');
            $query = $this->db->get('programs');
            return $query->result();
        }

        //Create New program
		public function register_program($data){
            foreach ($data as $index => $temp) {
				if($temp == ""){
					//echo $temp;
					$data[$index] = NULL;
					//echo $temp;
				}
			}
			$this->db->insert('programs',$data);
		}

		//Edit program
		public function edit_program($program_id, $data){
            foreach ($data as $index => $temp) {
				if($temp == ""){
					//echo $temp;
					$data[$index] = NULL;
					//echo $temp;
				}
			}
			$this->db->set($data);
			$this->db->where('id',$program_id);
			$this->db->update('programs');
		}

        //Get single program details
		public function get_program($program_id){
			$this->db->where('id',$program_id);
			$query = $this->db->get('programs');
			return $query->row();

			if($query->num_rows() == 1){
				return $query->row(0);
			}
			else{
				return false;
			}
        }

        //Delete program
		public function delete_program($program_id){
			$query = $this->db->where('id',$program_id);
			$query = $this->db->get('programs');

			if($query->num_rows() == 1){
				$this->db->where('id',$program_id);
				return $this->db->delete('programs');
				//echo "deleted";
				
			}
			else{
				return 0;
			}
		}
    } 