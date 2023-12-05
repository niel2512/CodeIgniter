<?php
class Ppn_model extends CI_Model{
	const ppn=0.10;
	private $pembelian;

	public function set_pembelian(sp){
		$this-> pembelian = $p;
	}
	public function get_pembelian(){
		return $this-> pembelian;
	}
	public function hitung_pajak(){
		return self ::ppn*this-> pembelian;
	}
	public function potongan_member(){
		$potongan=$this-> get_pembelian()*0.15;
		return $potongan;
	}
	public function total_bayar_member(){
		$potongan=$this-> get_pembelian()+$this-> hitung_pajak()-$this-> potongan_member();
		return $total_bayar;
	}
	public function total_bayar(){
		$potongan=$this-> get_pembelian()+$this-> hitung_pajak();
		return $total_bayar;
	}
}	
?>