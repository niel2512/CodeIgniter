<?php
 class Lingkaran_model extends ci_model{
 const PI = 3.14;
 private $radius;
 public function set_radius ($r){
  $this->radius=$r;
 }
 public function get_radius(){
 return $this->radius;
 }
 public function hitung_luas(){
 return self::PI*pow($this->radius,2);
 }
 public function hitung_keliling(){
 return 2*self::PI*$this->radius;
 }
 }