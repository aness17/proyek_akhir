<?php

class Pencarian extends CI_Controller
{

	public function index()
	{
		$this->load->view('templates_user/header');
		$this->load->view('user/pencarian');
		$this->load->view('templates_user/footer');
	}
	public function cari_ekspedisi($filter)
	{
		header('Content-Type: application/json; charset=utf-8');
		if ($filter == "Reguler") {
			echo json_encode($this->db->get("reguler")->result());
		} else {
			echo json_encode($this->db->get("luar_negeri")->result());
		}
		if ($filter == "JNE") {
			echo json_encode($this->db->get("jne")->result());
		} else {
			echo json_encode($this->db->get("tiki")->result());
		}
	}
}
