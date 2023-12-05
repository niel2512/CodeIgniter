<?php
class Barang_model extends CI_model{
	public $kode;
	public $nama;
	public $harga;
	public $stok;
	
	//array untuk menyimpan label dari masing-masing atribut
	public $labels=[];
	
	//konstuktor model
	public function __construct(){
		parent::__construct();
		$this->labels = $this->_attributelabels();
		
		//memuat librari database
		$this->load->database();	
	}
	//untuk menambah baris data dalam tabel
	public function insert(){
		$sql=sprintf("INSERT INTO barang VALUES('%s','%s', %f, %d)",
		$this->kode,
		$this->nama,
		$this->harga,
		$this->stok
		);
		$this->db->query($sql);
	}
	public function update(){
		$sql=sprintf("UPDATE barang SET nama ='%s', harga= %f, stok= %d WHERE kode='%s'",
		$this->nama,
		$this->harga,
		$this->stok,
		$this->kode
		);
		$this->db->query($sql);
	}
	public function delete(){
		$sql=sprintf("DELETE FROM barang WHERE kode='%s'",$this->kode);
		$this->db->query($sql);
	}
	public function read(){
		$sql="SELECT * FROM barang ORDER BY kode";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	//metode untuk menentukan label dari masing-masing atribut 
	
	public function _attributelabels(){
		return [
		'kode'=>'Kode:',
		'nama'=>'Nama Produk:',
		'harga'=>'Harga Produk:',
		'stok'=>'Stok:'
		];
		
	}
	
}
