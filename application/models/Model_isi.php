<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Model_isi extends CI_Model 
{    
    public function insert_data($data)
    {
        $this->db->insert('isi',$data);
    }

    public function get_isi_by_kdjadwalprakerin($kdjadwalprakerin)
    {
        $this->db->from('isi');
        $this->db->join('tempat_prakerin', 'tempat_prakerin.kdtempatprakerin = isi.kdtempatprakerin');
        $this->db->where('kdjadwalprakerin', $kdjadwalprakerin);
        return $this->db->get()->result_array();
    }
    public function hapus_isi($kdjadwalprakerin)
    {
        $this->db->where('kdjadwalprakerin',$kdjadwalprakerin);
        $this->db->delete('isi');
    }
}
?>