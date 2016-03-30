<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matlet extends CI_Model {

	
	function getAllAtlet(){
		$query=$this->db->get('t_entry');
		return $query->result();
	}

	function getAllCabor(){
		$query=$this->db->get('t_cabor');
		return $query->result();
	}

	function insertDataAtlet($data){
        $this->db->insert("t_entry",$data);
        return $this->db->insert_id();
    }

   // function updateDataAtlet($data,$id){
	//	$query = $this->db->update('t_entry', $data, array('id_entry' => $id));
      //  return $query;
	//}

	public function updateDataAtlet($id,$ubah){
		$this->db->update('t_entry',$ubah,array('id_entry'=>$id));
	}


	function ktpkosong(){
		$this->db->where('ktp', 0);
		$query = $this->db->get('t_entry');
		return $query->result();
	}

	function formkosong(){
		$query=$this->db->query('select * from t_entry where form=0');	
		return $query->result();
	}

	function find($id){
		$query=$this->db->get_where('t_entry', array('id_entry'=>$id));
		return $query->row();
	}

	public function deleteDataAtlet($id){
		$this->db->delete('t_entry',array('id_entry' => $id ));
	}
}

/* End of file Matlet.php */
/* Location: ./application/models/Matlet.php */