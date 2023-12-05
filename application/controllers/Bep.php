<?php

class Bep extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('Bep_helper');
    }

    public function index()
    {
        if (isset($_POST['btn_submit'])){
            
            $tfc = $_POST['tfc'];
            $p = $_POST['p'];
            $v = $_POST['v'];
            $x = $_POST['x'];
            
            $this->load->model('Bep_m');
            $model = $this->Bep_m;
            $model->set_tfc($tfc);
            $model->set_p($p);
            $model->set_v($v);
            $model->set_x($x);

            $tipe= $_POST['tipe'];


            $this->load->view('bep_v', array('model' =>$model, 'tfc'=>$tfc,'p'=>$p,'v'=>$v,'x'=>$x,'tipe'=>$tipe));
        }else{
            $this->load->view('Bep_F_V');
        }

        
    }
    public function helper(){
        if(isset($_POST['btn_submit'])){
            $tfc = $_POST['tfc'];
            $p = $_POST['p'];
            $v = $_POST['v'];
            $x = $_POST['x'];
            $tipe = $_POST['tipe'];
            $this->load->view('Bep_V_helper', array('tipe'=>$tipe,'tfc'=>$tfc,'p'=>$p,'v'=>$v,'x'=>$x));
        }else{
            $this->load->view('Bep_F_V');
        }
    }
}
?>