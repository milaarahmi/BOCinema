<?php
	class M_transaction extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function movie(){
			$query = $this->db->query('SELECT * from movie');
			$data = $query->result_array();
			$x=0;
			foreach ($data as $a) {
				$data[$x]['director']=$this->director($a['director']);
				$data[$x]['artist']=$this->artist($a['artist']);
				$data[$x]['writter']=$this->writter($a['writter']);
				$x++;
			}
			return $data;
		}
		public function director($director){
			$query = $this->db->query('SELECT * from director where director_id in ('.$director.')');
			$data = $query->result_array();
			return $data;
		}
		public function writter($writter){
			$query = $this->db->query('SELECT * from writter where writter_id in ('.$writter.')');
			$data = $query->result_array();
			return $data;
		}
		public function artist($artist){
			$query = $this->db->query('SELECT * from artist where artist_id in ('.$artist.')');
			$data = $query->result_array();
			return $data;
		}
	}
?>