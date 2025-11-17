<?php
defined('BASEPATH') OR exit ('No direct script acccess allowed');

class Model_tempat_prakerin extends CI_Model {

	public function view_data_tp()
	{
		$query = $this->db->get('tempat_prakerin');
		return $query->result_array();
	}

	public function hapus_tp($kdtempatprakerin)
	{
		$this->db->where('kdtempatprakerin',$kdtempatprakerin);
		$this->db->delete('tempat_prakerin');
	}

	public function input_data_tp($data)
	{
		$this->db->insert('tempat_prakerin',$data);
	}

	public function get_data_tp($kdtempatprakerin)
	{
		$this->db->where('kdtempatprakerin',$kdtempatprakerin);
		$query = $this->db->get('tempat_prakerin');
		return $query->row_array();
	}

	public function edit_data_tp($where, $data)
	{
		$this->db->where($where);
		$this->db->update('tempat_prakerin', $data);
	}

}
?>