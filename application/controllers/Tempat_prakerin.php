<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_prakerin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_tempat_prakerin');
	}

	public function index()
	{
		$data['data_tempat_prakerin']=$this->model_tempat_prakerin->view_data_tp();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tempat_prakerin',$data);
		$this->load->view('template/footer');

		if(isset($_POST['submit']))
		{ $this->_inputdata();}
	}

	public function hapus($kdtempatprakerin)
	{
		$this->model_tempat_prakerin->hapus_tp($kdtempatprakerin);
		$this->session->set_flashdata('pesan','<div class="alert alert-success" roel="alert">Berhasil Dihapus</div>');
		redirect('tempat_prakerin');

	}

	private function _inputdata(){
		$kdtempatprakerin = $this->input->post('kdtempatprakerin');
		$nmtempatprakerin = $this->input->post('nmtempatprakerin');
		$alamat = $this->input->post('alamat');
		$data = array(
			'kdtempatprakerin' => $kdtempatprakerin,
			'nmtempatprakerin' => $nmtempatprakerin,
			'alamat'=> $alamat
		);

		$this->model_tempat_prakerin->input_data_tp($data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success" roel="alert">Data Tempat Prakerin Berhasil Ditambahkan</div>');
		redirect('tempat_prakerin');
}
	public function tambahtp()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tambahTempat_prakerin');
		$this->load->view('template/footer');

		if(isset($_POST['submit']))
		{ $this->_inputdata();}
	}


	public function edittp($kdtempatprakerin=0){
		$data['edit'] = $this->model_tempat_prakerin->get_data_tp($kdtempatprakerin);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('editTempat_prakerin', $data);
		$this->load->view('template/footer');


	if(isset($_POST['submit']))
		{ $this->_prosesedit();}
	}

	private function _prosesedit(){
	$kdtempatprakerin = $this->input->post('kdtempatprakerin');
	$nmtempatprakerin = $this->input->post('nmtempatprakerin');
	$alamat = $this->input->post('alamat');
	$data = array(
		'kdtempatprakerin' => $kdtempatprakerin,
		'nmtempatprakerin' => $nmtempatprakerin,
		'alamat'=> $alamat
	);

	$where = array('kdtempatprakerin' => $kdtempatprakerin);
	$this->model_tempat_prakerin->edit_data_tp($where, $data);
	$this->session->set_flashdata('pesan', '<div class="alert alert-success roel="alert">Data Tempat Prakerin Berhasil Diubah</div>');
	redirect('tempat_prakerin');
}
}
?>