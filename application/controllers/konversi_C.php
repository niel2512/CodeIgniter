<?php
class Konversi_C extends CI_Controller{
	public function __construct(){
		parent::__construct();
        // $this->load->helper('konversihari');

	}
	public function index(){

		if (isset($_POST['btn_submit'])) {
            //$data[pilih] = $_POST['pilih'];
            $this->load->model('Konversi_M');
            $model = $this->Konversi_M;

            $wkt=$_POST['wkt'];
            $data=['wkt'=>$wkt];
            $model->set_wkt($wkt);

            //$this->load->view('Konversi_V', array('model'=>$model, 'pilih'=>$pilih));
            $this->load->view('Konversi_V', $data);
        }else {
            $this->load->view('Konversi_F_V');
        }
	}
}

?>