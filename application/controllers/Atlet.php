<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atlet extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Matlet');
	}

	function index()
	{
		$this->atlet_list();
	}

	function atlet_list(){
		$data['title']='All Data Atlet';
		$data['select']=$this->Matlet->getAllAtlet();
		$this->load->view('template/includes');
		$this->load->view('vatlet',$data);
	}

	function ktpkosong(){
		$data['title']='Data Atlet | KTP Kosong';
		$data['select']=$this->Matlet->ktpkosong();
		$this->load->view('template/includes');
		$this->load->view('vatlet',$data);
	}

	function formkosong(){
		$data['title']='Data Atlet | Form kosong';
		$data['select']=$this->Matlet->formkosong();
		$this->load->view('template/includes');
		$this->load->view('vatlet',$data);
	}

	function insertAtlet(){
		$data['title']='Insert Data Atlet';
		$data['action'] = 'insert';
		$post=$this->input->post();
		if ($post) {
			$this->Matlet->insertDataAtlet($post);
			redirect('atlet');
		}

		$data['cabor']=$this->Matlet->getAllCabor();
		$this->load->view('template/includes');
		$this->load->view('atlet',$data);
	}

	public function updateAtlet($id){
		$data['title']='Update Data Atlet';
		$data['action'] = 'update';
        $data['value']=$this->Matlet->find($id);
        $ubah=$this->input->post();
		if ($ubah) {
			$this->Matlet->updateDataAtlet($id,$ubah);
			redirect('atlet');
		}
		$data['cabor']=$this->Matlet->getAllCabor();
		$this->load->view('template/includes');
		$this->load->view('atlet',$data);
	}

	//Delete one item
	public function deleteAtlet($id){
		$this->Matlet->deleteDataAtlet($id);
		redirect('atlet','refresh');
	}
}

/* End of file Atletcontroller.php */
/* Location: ./application/controllers/Atletcontroller.php */
