<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function movie()
	{	
		$data['movie'] = $this->m_transaction->movie();
		$data = array(
				'template'=>$this->load->view('movie', $data, true),
				'js' =>$this->load->view('genre_js',$data,true),
				'css' =>$this->load->view('genre_css',$data,true),
				);
		$this->load->view('template', $data);
	}
}