<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Coa');
		
	}

	public function index(){
	
		$data=array(
			'page'=>'coa/listcoa',
			'link'=>'Coa',
			'list' => $this->M_Coa->listcoa(),
		);
		$this->load->view('template/wrapper',$data);
	}
}