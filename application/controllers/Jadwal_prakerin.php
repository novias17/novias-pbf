<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Jadwal_prakerin extends CI_Controller 
{
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_jadwal_prakerin');
        $this->load->model('model_siswa');
        $this->load->model('model_tempat_prakerin');
        $this->load->model('model_isi');
    }

    public function index()
    {
        $data['get_jadwal_prakerin'] = $this->model_jadwal_prakerin->view_data_jadwal_prakerin();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('jadwal_prakerin',$data);
        $this->load->view('template/footer');

        if(isset($_POST['submit']))
        { $this->_inputdata();}
    
    }

    public function hapus($kdjadwalprakerin)
    {
        $this->model_jadwal_prakerin->hapus_jadwal_prakerin($kdjadwalprakerin);
         $this->model_isi->hapus_isi($kdjadwalprakerin);
        $this->session->set_flashdata('pesan','<div class="alert alert-success" roel="alert">Data Jadwal Prakerin Berhasil Dihapus</div>');
        redirect('jadwal_prakerin');
    }

    public function tambahjadwal_prakerin()
    {
        $this->db->select_max('kdjadwalprakerin');
        $datakode = $this->db->get('jadwal_prakerin')->row_array();
        if ($datakode['kdjadwalprakerin'] != null) {
            $nilaikode = substr($datakode['kdjadwalprakerin'], 1);
            $kode = (int) $nilaikode;
            $kode += 1;
            $hasilkode = "N" . str_pad($kode, 3, "0", STR_PAD_LEFT);
        } else {
            $hasilkode = "N001";
    }

    $data = [
        'menu' => 'Tambah Siswa',
        'username' => $this->session->userdata('username'),
        'user_role' => $this->session->userdata('user_role'),
        'get_siswa' => $this->model_siswa->view_data_si(),
        'get_tempat_prakerin' => $this->model_tempat_prakerin->view_data_tp(),
        'kdjadwalprakerin' => $hasilkode,
    ];

    if ($this->input->post("kdjadwalprakerin")) {
        $this->__process_tambah($hasilkode);
        die;
    }

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('tambahjadwal_prakerin', $data);
    $this->load->view('template/footer');
}

private function _rules()
{
    $this->form_validation->set_rules('kdjadwalprakerin', 'kdjadwalprakerin', 'required|trim|xss_clean');
    $this->form_validation->set_rules('tahun_ajaran', 'tahun_ajaran', 'required|trim|xss_clean');
    $this->form_validation->set_rules('semester', 'semester', 'required|trim|xss_clean');
    $this->form_validation->set_rules('nisn', 'nisn', 'required|trim|xss_clean');
}

public function __process_tambah()
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambahjadwal_prakerin();
    } else {
        $kdjadwalprakerin = $this->input->post('kdjadwalprakerin');
        $tahun_ajaran = $this->input->post('tahun_ajaran');
        $semester = $this->input->post('semester');
        $nisn = $this->input->post('nisn');

        $data = array(
            'kdjadwalprakerin' => $kdjadwalprakerin,
            'tahun_ajaran' => $tahun_ajaran,
            'semester' => $semester,
            'nisn' => $nisn

        );

        $this->model_jadwal_prakerin->insert_data($data, 'jadwal_prakerin');

        //tambahan untuk masuk ke tabel isi
        $kdtempatprakerin = $this->input->post('kdtempatprakerin', true);
        $unit_kerja = $this->input->post('unit_kerja', true);
        $jam_kerja = $this->input->post('jam_kerja', true);
        foreach ($kdtempatprakerin as $key => $value) {
            $data = array(
                'kdjadwalprakerin' => $kdjadwalprakerin,
                'kdtempatprakerin' => $kdtempatprakerin[$key],
                'unit_kerja' => $unit_kerja[$key],
                'jam_kerja' => $jam_kerja[$key]
            );

            $this->model_isi->insert_data($data, 'isi');
        }

        //akhir tambahan untuk masuk ke tabel isi

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Jadwal Prakerin Berhasil Disimpan!!!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('jadwal_prakerin');
    }
}
//codingan cetak jadwal_prakerin
public function cetak($kdjadwalprakerin = 0)
{
    $get_jadwal_prakerin = $this->model_jadwal_prakerin->get_jadwal_prakerin_by_kdjadwalprakerin($kdjadwalprakerin);
    if(!$get_jadwal_prakerin) {
        redirect('jadwal_prakerin');
    }
    $get_isi = $this->model_isi->get_isi_by_kdjadwalprakerin($kdjadwalprakerin);
    $data = [
        'jadwal_prakerin' => $get_jadwal_prakerin,
        'get_isi' => $get_isi,
    ];
    $this->load->view('cetak',$data);
}
}
?>