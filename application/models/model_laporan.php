<?php
class Model_laporan extends CI_Model
{
    public function view_data_isi_laporan()
    {
        $this->db->select("*");
        $this->db->distinct('tahun_ajaran');
        $this->db->from('jadwal_prakerin');
        $this->db->join('siswa', 'siswa.nisn = jadwal_prakerin.nisn');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function view_tahun_ajaran()
    {
        $this->db->select('distinct (jadwal_prakerin.tahun_ajaran)');
        $this->db->from('jadwal_prakerin');
        $this->db->order_by('kdjadwalprakerin', 'ASC');
        return $this->db->get()->result_array();
    }

    public function view_semester()
    {
        $this->db->select('distinct (jadwal_prakerin.semester)');
        $this->db->from('jadwal_prakerin');
        $this->db->order_by('kdjadwalprakerin', 'ASC');
        return $this->db->get()->result_array();
    }

    public function get_laporan($tahun_ajaran)
    {
        $this->db->select('jadwal_prakerin.*,siswa.*,isi.unit_kerja,isi.jam_kerja,tempat_prakerin.*');
        $this->db->from('jadwal_prakerin');
        $this->db->from('siswa');
        $this->db->from('isi');
        $this->db->from('tempat_prakerin');
        $this->db->where('jadwal_prakerin.nisn=siswa.nisn and isi.kdjadwalprakerin=jadwal_prakerin.kdjadwalprakerin and isi.kdtempatprakerin=tempat_prakerin.kdtempatprakerin');
        $this->db->where('jadwal_prakerin.tahun_ajaran', $tahun_ajaran);
        $query = $this->db->get();
        return $query->result_array();
    }
}