<?php
	class M_master extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function genre(){
			$query = $this->db->query('SELECT * from genre');
			$data = $query->result_array();
			return $data;
		}
		public function artist(){
			$query = $this->db->query('SELECT * from artist');
			$data = $query->result_array();
			return $data;
		}
		public function director(){
			$query = $this->db->query('SELECT * from director');
			$data = $query->result_array();
			return $data;
		}
		public function writter(){
			$query = $this->db->query('SELECT * from writter');
			$data = $query->result_array();
			return $data;
		}
		public function add_artist(){
			$query = $this->db->query('SELECT * from artist');
			$data = $query->result_array();
			return $data;
		}
		public function save_artist($data){
			
			$this->db->insert('artist', $data);
		}
		public function update($artist_name,$dob,$gender,$picture,$artist_id){
			
			$this->db->set('artist_name', $artist_name);
			$this->db->set('dob', $dob);
			$this->db->set('gender', $gender);
			$this->db->set('picture', $picture);
			$this->db->where('artist_id', $artist_id);
			if($this->db->update('artist')){
				return 1;
			}else{
				return 0;
			}
		}
		public function delete($artist_id){
			$this->db->where('artist_id', $artist_id);
			if($this->db->delete('artist')){
				return 1;
			}else{
				return 0;
			}
		}
	}
?>