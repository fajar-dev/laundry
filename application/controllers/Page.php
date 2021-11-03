<?php
class Page extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	public function index(){
		$data['proses'] =  $this->Model_page->total_proses('tbl_cuci')->num_rows();
		$data['diambil'] =  $this->Model_page->total_diambil('tbl_cuci')->num_rows();
		$data['title'] = 'Dashboard';
		$this->load->view('header', $data);
    $this->load->view('dashboard');
    $this->load->view('footer');
	} 

	public function proses(){
		$data['hasil']= $this->Model_page->proses('tbl_cuci')->result();
		$data['title'] = 'Sedang Dicuci';
		$this->load->view('header', $data);
    $this->load->view('proses');
    $this->load->view('footer');
	}

	public function diambil(){
		$data['hasil']= $this->Model_page->diambil('tbl_cuci')->result();
		$data['title'] = 'Sudah diambil Pelanggan';
		$this->load->view('header', $data);
    $this->load->view('diambil');
    $this->load->view('footer');
	}

	public function tambah(){
		$data['title'] = 'Tambah Barang';
		$this->load->view('header', $data);
    $this->load->view('tambah');
    $this->load->view('footer');
	}

	public function tambah_proses()
	{
		$nama = $_POST['nama'];
		$masuk = $_POST['masuk'];
		$selesai = $_POST['selesai'];
		$berat = $_POST['berat'];
		$status = 1;
		$data = array(
			'nama'=>$nama,
			'masuk'=>$masuk,
			'keluar'=>$selesai,
			'berat'=>$berat,
			'status'=>$status
			);
		$this->Model_page->tambah('tbl_cuci',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon">
		<div class="alert-icon"><i class="fas fa-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success</div>
			Data barang berhasil diinput
		</div>
		</div>'
		);
		redirect(base_url('page/proses'));
	}

	public function ambil($id)
	{
		$status = 2;
		$tgl = date("Y-m-d h:i:sa");

		$data = array(
			'status'=>$status,
			'diambil'=>$tgl
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->Model_page->ambil($where,$data,'tbl_cuci');
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon">
		<div class="alert-icon"><i class="fas fa-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success</div>
			Data barang berhasil diedit
		</div>
		</div>'
		);
		redirect(base_url('page/diambil'));
	}

	function cancel($id)
	{
		$where = array('id'=>$id);
		$this->Model_page->cancel('tbl_cuci',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon">
		<div class="alert-icon"><i class="fas fa-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success</div>
			Cucian berhasil dicancel
		</div>
		</div>'
		);
		redirect(base_url('page/proses'));
	}
}