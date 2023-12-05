<?php
class demo_library extends CI_controller{
	public function __construct(){
	parent::__construct();
	//memuatlibrarytable
	$this->load->library('table');	
	}
public function index(){
	$data['heading'] = ['ID','Nama Produk', 'Harga'];
	$data['row1'] = ['P01','Spidol', 8500];
	$data['row2'] = ['P02','Tinta', 22000];
	$data['row3'] = ['P03','Pensil', 5000];	
	$this->load->view('demo_library_view',['data'=>$data]);
}
}