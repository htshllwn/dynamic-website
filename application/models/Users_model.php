<?php
    class Users_model extends CI_Model{

        public function __construct(){
            //Load Database
            $this->load->database();
        }

        //Get All users
        public function get_users(){
            $this->db->order_by('user_full_name');
            $query = $this->db->get('users');
            return $query->result();
        }

        //Create New user
		public function register_user($data){
            foreach ($data as $index => $temp) {
				if($temp == ""){
					//echo $temp;
					$data[$index] = NULL;
					//echo $temp;
				}
			}
			$this->db->insert('users',$data);
		}

		//Edit user
		public function edit_user($user_id, $data){
            foreach ($data as $index => $temp) {
				if($temp == ""){
					//echo $temp;
					$data[$index] = NULL;
					//echo $temp;
				}
			}
			$this->db->set($data);
			$this->db->where('id',$user_id);
			$this->db->update('users');
		}

        //Get single user details
		public function get_user($user_id){
			$this->db->where('id',$user_id);
			$query = $this->db->get('users');
			return $query->row();

			if($query->num_rows() == 1){
				return $query->row(0);
			}
			else{
				return false;
			}
        }

        //Delete user
		public function delete_user($user_id){
			$query = $this->db->where('id',$user_id);
			$query = $this->db->get('users');

			if($query->num_rows() == 1){
				$this->db->where('id',$user_id);
				return $this->db->delete('users');
				//echo "deleted";
				
			}
			else{
				return 0;
			}
		}
    } 