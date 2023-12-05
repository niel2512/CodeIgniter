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
      $kategori_barang = $this->input->post('kategori_barang');
            $data['record']= $this->model_barang2->laporan_periode($kategori_barang);
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