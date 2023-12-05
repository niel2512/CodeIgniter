<?php
class Bom extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('bom_helper');
	}
	public function index(){
		if (isset($_POST['btn_submit'])) {
			$tipe = $_POST['tipe'];
			$this->load->model('Bom_m');
			$model = $this->Bom_m;
			$jumlah=$_POST['jumlah'];
			$model->set_jumlah($jumlah);
			$this->load->view('bom_view', array('model'=>$model, 'tipe'=>$tipe));
		}else {
			$this->load->view('bom_form_view');
		}
	}
	public function helper(){
		if(isset($_POST['btn_submit'])){
			$tipe = $_POST['tipe'];
			$jumlah = $_POST['jumlah'];
			$this->load->view('bom_helper_view', array('tipe'=>$tipe,'jumlah'=>$jumlah));
		}else{
			$this->load->view('bom_form_view');
		}
	}
}
