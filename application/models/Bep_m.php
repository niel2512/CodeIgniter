<?php

class Bep_m extends CI_Model
{
    public function set_tfc($tfc){
        $this->tfc = $tfc;
    }

    public function set_p($p){
        $this->p = $p;
    }

    public function set_v($v){
        $this->v = $v;
    }

    public function set_x($x){
        $this->x = $x;
    }

    public function get_bep()
    {
        return $this->bep;
    }

    public function get_tfc()
    {
        return $this->tfc;
    }

    public function get_p()
    {
        return $this->p;
    }

    public function get_v()
    {
        return $this->v;
    }

    public function get_x()
    {
        return $this->x;
    }

    public function bep_unit(){
        $bep = $this->get_tfc()/ ($this->get_p() - $this->get_v());
        return $bep;
    }

    public function bep_waktu(){
        $bep = $this->bep_unit()/ $this->get_x();
        return $bep;
    }

    public function bep_nilai(){
        $bep = $this->get_tfc()/ 1-($this->get_v() - $this->get_p());
        return $bep;
    }
}


?>