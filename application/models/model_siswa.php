<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Model_siswa extends CI_Model {
    
    public function view_data_si()
    {
        $query = $this->db->get('siswa');
        return $query->result_array();
    }

    public function hapus_si($nisn)
    {
        $this->db->where('nisn',$nisn);
        $this->db->delete('siswa');
    }

    public function input_data_si($data)
    {
        $this->db->insert('siswa',$data);
    }

    public function get_data_si($nisn)
    {
        $this->db->where('nisn',$nisn);
        $query = $this->db->get('siswa');
        return $query->row_array();
    }

    public function edit_data_si($where, $data)
    {
        $this->db->where($where);
        $this->db->update('siswa',$data);
    }
    
}
?>