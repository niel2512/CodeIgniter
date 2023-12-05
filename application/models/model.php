<?php
class Konversi_M, extends CI_Model
{

    public function set_wkt($w)
    {
        $this->wkt = $w;
    }

    public function get_wkt()
    {
        return $this->wkt;
    }

    public function hr_k_j()
    {
        $wkt=$this->get_wkt()*24;
        return $wkt;
    }

    public function hr_k_m()
    {
        $wkt=$this->get_wkt()*1440;
        return $wkt;
    }

    public function hr_k_d()
    {
        $wkt=$this->get_wkt()*86400;
        return $wkt;
    }

}


?>