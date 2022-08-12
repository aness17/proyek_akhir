<?php 

class Sebaran extends CI_Controller{

	public function index(){
		$this->load->view('templates_user/header');
		$this->load->view('user/sebaran');
		$this->load->view('templates_user/footer');
	}
}