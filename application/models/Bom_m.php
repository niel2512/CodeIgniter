<?php

class Bom_m extends CI_Model
{
	public function set_jumlah($j)
	{
		$this->jumlah = $j;
	}

	public function get_jumlah()
	{
		return $this->jumlah;
	}

	public function tea_bubuk()
	{
		$total=$this->get_jumlah()*25;
		return $total;
	}

	public function tea_air()
	{
		$total=$this->get_jumlah()*100;
		return $total;
	}

	public function tea_es()
	{
		$total=$this->get_jumlah()*50;
		return $total;
	}

	public function harga_bubuk()
	{
		$total=$this->tea_bubuk()*80;
		return $total;
	}

	public function harga_air()
	{
		$total=$this->tea_air()*0.8;
		return $total;
	}

	public function harga_es()
	{
		$total=$this->tea_es()*1;
		return $total;
	}
}
