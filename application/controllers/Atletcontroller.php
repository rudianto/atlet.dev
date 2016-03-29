<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atletcontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Matlet');

	}

	// List all your items
	public function index()
	{
	 	/*$this->load->view('template/includes');
		$this->load->view('dashboard');*/
		$data['select']=$this->Matlet->select();
		$this->load->view('template/includes');
		$this->load->view('ventrytable',$data);
	}

	public function viewentry()
	{
		$data['select']=$this->Matlet->select();
		$this->load->view('template/includes');
		$this->load->view('ventrytable',$data);
	}

	public function ktpkosong()
	{
		$data['select']=$this->Matlet->ktpkosong();
		$this->load->view('template/includes');
		$this->load->view('ventrytable',$data);
	}

	public function formkosong()
	{
		$data['select']=$this->Matlet->formkosong();
		$this->load->view('template/includes');
		$this->load->view('ventrytable',$data);
	}

	// Add a new item
	public function add()
	{
		$this->load->view('template/includes');
		$this->load->view('ktpkosong');
	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Atletcontroller.php */
/* Location: ./application/controllers/Atletcontroller.php */
