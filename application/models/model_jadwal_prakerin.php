<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Model_jadwal_prakerin extends CI_Model {
    
    public function view_data_jadwal_prakerin()
    {
        $this->db->select('*');
        $this->db->from('jadwal_prakerin');
        $this->db->join('siswa','siswa.nisn = jadwal_prakerin.nisn');
        return $this->db->get()->result_array();
    }

    public function hapus_jadwal_prakerin($kdjadwalprakerin)
    {
        $this->db->where('kdjadwalprakerin',$kdjadwalprakerin);
        $this->db->delete('jadwal_prakerin');
    }
    
    public function insert_data($data)
    {
        $this->db->insert('jadwal_prakerin',$data);
    }

    public function get_jadwal_prakerin_by_kdjadwalprakerin($kdjadwalprakerin)
    {
        $this->db->from('jadwal_prakerin');
        $this->db->join('siswa', 'siswa.nisn = jadwal_prakerin.nisn');
        $this->db->where('kdjadwalprakerin', $kdjadwalprakerin);
        return $this->db->get()->row_array();
    }
    
}
?>