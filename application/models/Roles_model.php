<?php
    class Roles_model extends CI_Model{

        public function __construct(){
            //Load Database
            $this->load->database();
        }

        //Get All roles
        public function get_roles(){
            $this->db->order_by('role_name');
            $query = $this->db->get('roles');
            return $query->result();
        }

        //Create New role
		public function register_role($data){
            foreach ($data as $index => $temp) {
				if($temp == ""){
					//echo $temp;
					$data[$index] = NULL;
					//echo $temp;
				}
			}
			$this->db->insert('roles',$data);
		}

		//Edit role
		public function edit_role($role_id, $data){
            foreach ($data as $index => $temp) {
				if($temp == ""){
					//echo $temp;
					$data[$index] = NULL;
					//echo $temp;
				}
			}
			$this->db->set($data);
			$this->db->where('id',$role_id);
			$this->db->update('roles');
		}

        //Get single role details
		public function get_role($role_id){
			$this->db->where('id',$role_id);
			$query = $this->db->get('roles');
			return $query->row();

			if($query->num_rows() == 1){
				return $query->row(0);
			}
			else{
				return false;
			}
        }

        //Delete role
		public function delete_role($role_id){
			$query = $this->db->where('id',$role_id);
			$query = $this->db->get('roles');

			if($query->num_rows() == 1){
				$this->db->where('id',$role_id);
				return $this->db->delete('roles');
				//echo "deleted";
				
			}
			else{
				return 0;
			}
		}
    } 