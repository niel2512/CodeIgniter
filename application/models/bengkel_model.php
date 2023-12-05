<?php
class bengkel_model extends CI_model{
    public $Nomor_tnkb;
	public $Nama_pemilik;
	public $Nomor_mesin;
	public $Nomor_sasis;
    public $Jenis_mobil;
    public $Kapasitas_mesin_mobil;
    public $Tahun_pembuatan_mobil;
	
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
		$sql=sprintf("INSERT INTO kendaraan VALUES(%d,'%s', %d, %d, '%s', %d, %d)",
		$this->Nomor_tnkb,
		$this->Nama_pemilik,
		$this->Nomor_mesin,
		$this->Nomor_sasis,
        $this->Jenis_mobil,
        $this->Kapasitas_mesin_mobil,
        $this->Tahun_pembuatan_mobil,
		);
		$this->db->query($sql);
	}
	public function update(){
		$sql=sprintf("UPDATE kendaraan SET Nama_pemilik ='%s', Nomor_mesin=%d, Nomor_sasis=%d, Jenis_mobil='%s', Kapasitas_mesin_mobil=%d, Tahun_pembuatan_mobil=%d WHERE Nomor_tnkb=%d",
        $this->Nama_pemilik,
        $this->Nomor_mesin,
        $this->Nomor_sasis,
        $this->Jenis_mobil,
        $this->Kapasitas_mesin_mobil,
        $this->Tahun_pembuatan_mobil,
        $this->Nomor_tnkb
		);
		$this->db->query($sql);
	}
	public function delete(){
		$sql=sprintf("DELETE FROM kendaraan WHERE Nomor_tnkb='%s'",$this->Nomor_tnkb);
		$this->db->query($sql);
	}
	public function read(){
		$sql="SELECT * FROM kendaraan ORDER BY Nomor_tnkb";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	//metode untuk menentukan label dari masing-masing atribut 
	
	public function _attributelabels(){
		return [
		'Nomor_tnkb'=>'Nomor_tnkb:',
		'Nama_pemilik'=>'Nama_pemilik:',
		'Nomor_mesin'=>'Nomor_mesin:',
		'Nomor_sasis'=>'Nomor_sasis:',
        'Jenis_mobil'=>'Jenis_mobil:',
        'Kapasitas_mesin_mobil'=>'Kapasitas_mesin_mobil:',
        'Tahun_pembuatan_mobil'=>'Tahun_pembuatan_mobil:',
		];
		
	}
	
}