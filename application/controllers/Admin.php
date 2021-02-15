<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('download');
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'mp3|mp4';
		$config['max_size']             = 0;

		$this->upload->initialize($config);
		
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/index', $data);
      	$this->load->view('tema/admin/footer');
   
	}

	public function galeri()
	{
		$data['title'] = 'Galeri';
		$data['z'] = $this->AdminModel->getDataGaleri();
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/galeri', $data);
      	$this->load->view('tema/admin/footer');
   
	}

	public function penyiar()
	{
		$data['title'] = 'Penyiar';
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/penyiar', $data);
      	$this->load->view('tema/admin/footer');
   
	}

	public function jadwal()
	{
		$data['title'] = 'Jadwal';
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/jadwal', $data);
      	$this->load->view('tema/admin/footer');
   
	}

	public function user()
	{
		$data['title'] = 'User';
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/user', $data);
      	$this->load->view('tema/admin/footer');
   
	}
	public function tambahGaleri()
	{
		
		//$this->form_validation->set_rules('UrlYt', 'Url Youtube', 'trim|required');
		$this->form_validation->set_rules('JudulGaleri', 'Judul Galeri', 'trim|required');
		$this->form_validation->set_rules('DeskripsiGaleri', 'Deskripsi Galeri', 'trim|required');
	
		
		//$this->upload->initialize($config);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Ditambahkan Pastikan Data Terisi Dengan Benar</div>');
			redirect('admin/galeri');	
		} else {
			if(!$this->upload->do_upload('UploadFile')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Periksa Lagi File Upload</div>');
				redirect('admin/galeri');	
			} else {
				$namaBerkas = $this->upload->data("file_name");
				$this->AdminModel->tambahGaleri($namaBerkas);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Ditambahkan</div>');
				redirect('admin/galeri');
			}
					
			
		}
	}
	public function tambahGaleriYt()
	{
		$this->form_validation->set_rules('UrlYt', 'Url Youtube', 'trim|required');
		$this->form_validation->set_rules('JudulGaleriYt', 'Judul Galeri', 'trim|required');
		$this->form_validation->set_rules('DeskripsiGaleriYt', 'Deskripsi Galeri', 'trim|required');
	
		
		//$this->upload->initialize($config);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Ditambahkan Pastikan Data Terisi Dengan Benar</div>');
			redirect('admin/galeri');	
		} else {
			
				//$namaBerkas = $this->upload->data("file_name");
				$this->AdminModel->tambahGaleriYt();
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Ditambahkan</div>');
				redirect('admin/galeri');	
			
		}
	}

	public function hapusGaleri($id)
    {
			$this->AdminModel->hapusDataGaleri($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Dihapus</div>');
			redirect('admin/galeri');
    }

	public function getInfoGaleri()
   {
	 
		echo json_encode($this->AdminModel->getGaleriById($_POST['id']));

   }


}
