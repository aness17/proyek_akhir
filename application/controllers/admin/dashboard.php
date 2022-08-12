<?php 

class Dashboard extends CI_Controller{

	public function index(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('template_admin/footer');
	}
	public function sebaran(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/sebaran');
		$this->load->view('template_admin/footer');
	}
	public function addsebaran(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/addsebaran');
		$this->load->view('template_admin/footer');
	}
	public function editsebaran($id=''){
		$data['id'] = $id;
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/editsebaran',$data);
		$this->load->view('template_admin/footer');
	}

	//simpan data sebarn
	public function savesebaran()
	{
		$agen  = $_POST['agen'];
		$telp  = $_POST['telp'];
		$lat  = $_POST['lat'];
		$lng  = $_POST['lng'];
		$alamat  = $_POST['alamat'];
		$this->db->query("insert into sebaran values('','$agen','$alamat','$telp','$lat','$lng')");
		$this->session->set_flashdata('msg', 'success');
		redirect(base_url("admin/dashboard/sebaran"));
	}

	//simpan data edit sebarn
	public function saveupdatesebaran($id='')
	{
		$agen  = $_POST['agen'];
		$telp  = $_POST['telp'];
		$lat  = $_POST['lat'];
		$lng  = $_POST['lng'];
		$alamat  = $_POST['alamat'];
		$this->db->query("UPDATE sebaran set nama='$agen',telp='$telp',lat='$lat',lng='$lng',alamat='$alamat' where id='$id'");
		$this->session->set_flashdata('msg', 'success');
		redirect(base_url("admin/dashboard/sebaran"));
	}

	//hapussebaran
	public function hapussebaran($id='')
	{
		$this->db->query("delete from sebaran where id='$id'");
		$this->session->set_flashdata('msg', 'hapus');
		redirect(base_url("admin/dashboard/sebaran"));
	}
}