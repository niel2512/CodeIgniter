<?php
class crud extends CI_controller{
	public $model = NULL;
	
	public function __construct(){
		parent::__construct();
		//memuat model
	$this->load->model('bengkel_model');
	$this->model =$this->bengkel_model;
	
	//memuat librari database
	$this->load->database();
	}
	
	public function index(){
	$this->read();
	}
	public function create() {
	//belum implementasi
        if (isset($_POST['btnSubmit'])) {
			$this->model->Nomor_tnkb=$_POST['Nomor_tnkb'];
			$this->model->Nama_pemilik=$_POST['Nama_pemilik'];
			$this->model->Nomor_mesin=$_POST['Nomor_mesin'];
			$this->model->Nomor_sasis=$_POST['Nomor_sasis'];
			$this->model->Jenis_mobil=$_POST['Jenis_mobil'];
			$this->model->Kapasitas_mesin_mobil=$_POST['Kapasitas_mesin_mobil'];
			$this->model->Tahun_pembuatan_mobil=$_POST['Tahun_pembuatan_mobil'];
			$this->model->insert();
			redirect('crud');
		}else{
			$this->load->view('mobil_view',['model'=>$this->model]);
		}
	}
    	
	public function read() {
		$rows=$this->model->read();
		$this->load->view('read_view', ['rows'=>$rows]);
	}
	public function update($id) {
		//belum implementasi
		if (isset($_POST['btnSubmit'])) {
			$this->model->Nomor_tnkb=$_POST['Nomor_tnkb'];
			$this->model->Nama_pemilik=$_POST['Nama_pemilik'];
			$this->model->Nomor_mesin=$_POST['Nomor_mesin'];
			$this->model->Nomor_sasis=$_POST['Nomor_sasis'];
			$this->model->Jenis_mobil=$_POST['Jenis_mobil'];
			$this->model->Kapasitas_mesin_mobil=$_POST['Kapasitas_mesin_mobil'];
			$this->model->Tahun_pembuatan_mobil=$_POST['Tahun_pembuatan_mobil'];
			$this->model->update();
			redirect('crud');
		}else{
			$query = $this->db->query("SELECT * FROM kendaraan WHERE 
			Nomor_tnkb='$id'");
			//if ($query->num_row() ==0) exit(1);
				$row =$query->row();
				$this->model->Nomor_tnkb=$row->Nomor_tnkb;
				$this->model->Nama_pemilik=$row->Nama_pemilik;
				$this->model->Nomor_mesin=$row->Nomor_mesin;
				$this->model->Nomor_sasis=$row->Nomor_sasis;
				$this->model->Jenis_mobil=$row->Jenis_mobil;
				$this->model->Kapasitas_mesin_mobils=$row->Kapasitas_mesin_mobil;
				$this->model->Tahun_pembuatan_mobil=$row->Tahun_pembuatan_mobil;
				$this->load->view('crud_update_view',
				['model'=>$this->model]);
		}
	}
	public function delete($id) {
		//menentukan Nomor_tnkb yang akan di hapus
		$this->model->Nomor_tnkb = $id;
		//menghapus baris data di dalam tabel barang
		$this->model->delete();
		//mengarahkan kembali ke halaman utama/index
		redirect('crud');
	}
}