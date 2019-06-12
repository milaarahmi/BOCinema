<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function genre()
	{	
		$data['genre'] = $this->m_master->genre();
		$data['activeM'] ='master';
		$data['active'] ='master_genre';
		$data = array(
				'template'=>$this->load->view('genre', $data, true),
				'js' =>$this->load->view('genre_js',$data,true),
				'css' =>$this->load->view('genre_css',$data,true),
				);
		$this->load->view('template', $data);
	}
	public function artist()
	{	
		$data['artist'] = $this->m_master->artist();
		$data['activeM'] ='master';
		$data['active'] ='master_artist';
		$data = array(
				'template'=>$this->load->view('artist', $data, true),
				'js' =>$this->load->view('artist_js',$data,true),
				'css' =>$this->load->view('artist_css',$data,true),
				);
		$this->load->view('template', $data);
	}
	public function director()
	{	
		$data['director'] = $this->m_master->director();
		$data['activeM'] ='master';
		$data['active'] ='master_directore';
		$data = array(
				'template'=>$this->load->view('director', $data, true),
				'js' =>$this->load->view('director_js',$data,true),
				'css' =>$this->load->view('director_css',$data,true),
				);
		$this->load->view('template', $data);
	}
	public function writter(){
		$data['writter'] = $this->m_master->writter();
		$data['activeM'] ='master';
		$data['active'] ='master_writter';
		$data = array(
				'template'=>$this->load->view('writter', $data, true),
				'js' =>$this->load->view('writter_js',$data,true),
				'css' =>$this->load->view('writter_css',$data,true),
				);
		$this->load->view('template', $data);
	}
	public function add_artist(){
		$data['activeM'] ='master';
		$data['active'] ='master_artist';
		$data = array(
				'template'=>$this->load->view('add_artist', $data, true),
				);
		$this->load->view('template', $data);
	}
	public function save_artist(){
		$artist_name= $this->input->post('artist_name');
		$dob= $this->input->post('dob');
		$gender= $this->input->post('gender');
		$picture= $this->input->post('pic');

		$insert['artist_name'] = $artist_name;
		$insert['dob'] = date('Y-m-d', strtotime($dob));
		$insert['gender'] = $gender;
		$insert['picture'] = $picture;

		$this->m_master->save_artist($insert);
		redirect(base_url().'master/artist');
	}
	public function update_artist(){
		$artist_name= $this->input->post('artist_name');
		$dob=  date('Y-m-d', strtotime($this->input->post('dob')));
		$gender= $this->input->post('gender');
		$picture= $this->input->post('picture');
		$artist_id = $this->input->post('artist_id');

		$update = $this->m_master->update($artist_name,$dob,$gender,$picture,$artist_id);

		echo $update;
		// redirect(base_url().'master/artist');
	}
	public function delete_artist($id){
		$artist_id = $this->input->post('artist_id');
		$update = $this->m_master->delete($id);

		echo $update;
	}

}