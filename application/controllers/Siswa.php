<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Siswa extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('model_siswa');
    }

    public function index()
    {
        $data['data_siswa']=$this->model_siswa->view_data_si();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('siswa',$data);
        $this->load->view('template/footer');

        if(isset($_POST['submit']))
        { $this->_inputdata();}
    }

    public function hapus($nisn)
    {
        $this->model_siswa->hapus_si($nisn);
        $this->session->set_flashdata('pesan','<div class="alert alert-success" roel="alert">Berhasil Dihapus</div>');
        redirect('siswa');

    }

    private function _inputdata(){
        $nisn = $this->input->post('nisn');
        $nm_siswa = $this->input->post('nm_siswa');
        $no_hp = $this->input->post('no_hp');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $data = array(
            'nisn' => $nisn,
            'nm_siswa' => $nm_siswa,
            'no_hp' => $no_hp,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat
        );

        $this->model_siswa->input_data_si($data);
        $this->session->set_flashdata('pesan','<div class="alert alert-success" roel="alert">Data Siswa Berhasil Ditambahkan</div>');
        redirect('siswa');
    }

    public function tambahsi()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('tambahSiswa');
        $this->load->view('template/footer');

        if(isset($_POST['submit']))
        { $this->_inputdata();}
    }

    public function editsi($nisn=0){
        $data['edit'] = $this->model_siswa->get_data_si($nisn);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('editSiswa',$data);
        $this->load->view('template/footer');


        if(isset($_POST['submit']))
        { $this->_prosesedit();}
    }

    private function _prosesedit(){
        $nisn = $this->input->post('nisn');
        $nm_siswa = $this->input->post('nm_siswa');
        $no_hp = $this->input->post('no_hp');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $data = array(
            'nisn' => $nisn,
            'nm_siswa' => $nm_siswa,
            'no_hp' => $no_hp,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat
        );

        $where = array('nisn' => $nisn); 
        $this->model_siswa->edit_data_si($where, $data);
        $this->session->set_flashdata('pesan','<div class="alert alert-success" roel="alert">Data Siswa Berhasil Diubah</div>');
        redirect('siswa');
    }
}
?>