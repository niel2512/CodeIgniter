<?php
class hitung extends ci_controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('hitung');
	}
	public function index(){
		$this->load->view('hitung_view');
	}
}