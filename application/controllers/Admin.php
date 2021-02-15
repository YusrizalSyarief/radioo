<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		header('Access-Control-Allow-Origin: *');
    	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
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
		//$id = $this->session->userdata('ID_USER');
		$config['base_url'] = 'https://localhost/radioo/admin/galeri';
		$config['total_rows'] = $this->AdminModel->getCountDataGaleri();
		
		$config['per_page'] = 5;

		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = ' </ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		
		$this->pagination->initialize($config);
		
		$data['start'] = $this->uri->segment(3);
		
		$data['z'] = $this->AdminModel->getDataGaleri($config['per_page'],$data['start']);
		//$data['z'] = $this->AdminModel->getDataGaleri();
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
