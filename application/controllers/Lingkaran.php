<?php
class lingkaran extends CI_controller{
public function index(){
	if (isset($_POST['btnsubmit'])){
	$this->load->model('Lingkaran_model');
	$model=$this->Lingkaran_model;
	$radius=$_POST['jari2'];
	$model->set_radius($radius);
	$this->load->view('Lingkaranview',array('model'=>$model));
	}else{
	$this->load->view('lingkaran_form_view');
	}
}
}
