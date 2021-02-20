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
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/index');
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



}