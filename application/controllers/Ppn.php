<?php
class Ppn extends CI_controller{
	public function index (){
		if(isset($_POST['btnsubmit'])){
			$cust=$_POST['cust'];

			$this-> load-> model('Ppn_model');
			$model = $this ->Ppn_model;
			$pembelian=$_POST['ppn'];

			$model -> set_pembelian ($pembelian);

			$this-> load-> view('Ppn_view', array('model'=>$model, 'cust'=>$cust));
		}else{
				$this-> load-> view('formview');
	}
}
}
?>