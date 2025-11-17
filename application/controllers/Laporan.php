<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Laporan extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_laporan');
    }

    public function index()
    {
        
        $isi_laporan = $this->model_laporan->view_data_isi_laporan();

        $data = [
            'username' => $this->session->userdata('username'),
            'user_role' => $this->session->userdata('user_role'),
            'get_tahun_ajaran' => $this->model_laporan->view_tahun_ajaran(),
            'get_semester' => $this->model_laporan->view_semester(),
            'data_isi' => $isi_laporan
            ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('cetaklaporanjadwal_prakerin',$data);
        $this->load->view('template/footer');
    }

        public function cetak()
    {
        $tahun_ajaran = $this->input->get('tahun_ajaran');
        $semester = $this->input->get('semester');
        $result = $this->model_laporan->get_laporan($tahun_ajaran,$semester);
        if(!$result) {
            $this->session->set_flashdata('pesan','<div class="alert alert-success" roel="alert">Data Tahun Ajaran yang dipilih tidak tersedia</div>');
            redirect('laporan');
        }
        $data = [
            'daftar_laporan' => $result,
            'tahun_ajaran' => $tahun_ajaran,
            'semester' => $semester
        ];
        $this->load->view('laporan_jadwal_prakerin', $data);
    }

}
?>