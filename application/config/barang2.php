<?php
class barang2 extends CI_controller{
 function __construct() {
        parent::__construct();
        $this->load->model(array('model_barang2'));
    }
    
    function index()
    {
      if(isset($_POST['submit']))
        {
      $tanggal1 = $this->input->post('tanggal1');
      $tanggal2 = $this->input->post('tanggal2');
            $data['record']= $this->model_barang2->laporan_periode($tanggal1,$tanggal2);
      $this->load->view('laporan_barang2',$data);
        }
        else
       {
      $data['record']= $this->model_barang2->laporan_default();
      $this->load->view('laporan_barang2',$data);
        }
    }
    
       
   }
?>