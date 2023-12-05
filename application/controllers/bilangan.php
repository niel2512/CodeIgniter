<h1><font size="5" color="blue">Menentukan Bilangan Genap, Ganjil, Prima dan Kelipatan 2 </h1>
<?php
class bilangan extends ci_controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('bilangan');
	}
	public function index(){
		$this->load->view('bilangan_view');
	}
}