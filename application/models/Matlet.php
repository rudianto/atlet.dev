<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matlet extends CI_Model {

	
	public function select()
	{
		$query=$this->db->get('t_entry');
		return $query->result();
	}
	public function ktpkosong()
	{
		$this->db->where('ktp', 0);
		$query = $this->db->get('t_entry');
		return $query->result();
	}

	public function formkosong()
	{
		$query=$this->db->query('select * from t_entry where form=0');
		
		return $query->result();
	}
}

/* End of file Matlet.php */
/* Location: ./application/models/Matlet.php */