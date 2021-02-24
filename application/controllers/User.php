<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		$data['title'] = 'Beranda';
		$data['jadwal'] = $this->UserModel->getJadwal();
		$data['penyiar'] = $this->UserModel->getPenyiar();
		$data['audio'] = $this->UserModel->getAudio();
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/index', $data);
		$this->load->view('tema/modal/modalberanda');
      	$this->load->view('tema/user/footer');
   
	}

	public function galeri()
	{
		// $a = $this->input->post('email', true);
		$data['title'] = 'Galeri';
		$data['format'] = $this->UserModel->getDataFormat();
		$data['kategori'] = $this->UserModel->getKategori();
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/galeri', $data);
      	$this->load->view('tema/user/footer');
		
		// $this->UserModel->getDataFormat();
   
	}

	public function bukutamu()
	{
		$data['title'] = 'Buku Tamu';
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/bukutamu');
      	$this->load->view('tema/user/footer');
   
	}

	public function pengajuan()
	{
		$this->form_validation->set_rules('namaTamu', 'Nama Tamu', 'trim|required');
		$this->form_validation->set_rules('emailTamu', 'Email Tamu', 'trim|required');
		$this->form_validation->set_rules('isiTamu', 'Isi Tamu', 'trim|required');
	
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Form Harus Lengkap!</div>');
			redirect('user/bukutamu');	
		} else {
				$this->UserModel->bukuTamu();
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Form Berhasil Dikirim</div>');
				redirect('user/bukutamu');	
		}
   
	}

	public function editProfil()
	{
		$config['upload_path']          = './uploads/img';
		$config['allowed_types']        = 'png|jpg';
		$config['max_size']             = 10000;	

		$this->upload->initialize($config);
		$this->form_validation->set_rules('Nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('NoTlp', 'No Telfon', 'trim|required');
		$this->form_validation->set_rules('Biografi', 'Biografi', 'trim|required');
	
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Ditambahkan Pastikan Data Terisi Dengan Benar</div>');
			redirect('admin/penyiar');	
		} else {
			if(!$this->upload->do_upload('UploadFoto')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Periksa Lagi File Upload</div>');
				redirect('admin/penyiar');	
			} else {
				$namaBerkas = $this->upload->data("file_name");
				$this->AdminModel->tambahPenyiar($namaBerkas);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Ditambahkan</div>');
				redirect('admin/penyiar');
			}
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('NamaU', 'Nama User', 'trim|required');
		$this->form_validation->set_rules('EmailU', 'Email User', 'required|trim|valid_email|is_unique[user.EMAIL]', [
			'is_unique' => 'Email Sudah Pernah Didaftarkan!'
		]);
		$this->form_validation->set_rules('passwordR', 'Password', 'required|trim|min_length[3]|matches[passwordR2]', 
				[
					'matches' => 'Password Tidak Sama!',
					'min_length' => 'Password Terlalu Pendek!'
				]);
		$this->form_validation->set_rules('passwordR2', 'Password2', 'required|trim|matches[passwordR]');
	
		if ($this->form_validation->run() == false) {
			redirect('user');
		} else {
			$this->UserModel->register();
			redirect('user');	
		}
	}

	public function ratingWeb()
	{


	} 

	public function ratingAcara()
	{

		
	}

}