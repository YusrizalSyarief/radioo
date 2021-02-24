<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		header('Access-Control-Allow-Origin: *');
    	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		parent::__construct();
		$this->load->helper('download');
		
		
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
		$config['base_url'] = 'https://localhost/radioo/admin/penyiar';
		$config['total_rows'] = $this->AdminModel->getCountDataPenyiar();
		
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

		$data['z'] = $this->AdminModel->getDataPenyiar($config['per_page'],$data['start']);
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/penyiar', $data);
      	$this->load->view('tema/admin/footer');
   
	}

	public function jadwal()
	{
		$data['title'] = 'Jadwal';
		$config['base_url'] = 'https://localhost/radioo/admin/jadwal';
		$config['total_rows'] = $this->AdminModel->getCountDataJadwal();
		
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

		$data['z'] = $this->AdminModel->getDataJadwal($config['per_page'],$data['start']);
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/jadwal', $data);
      	$this->load->view('tema/admin/footer');
   
	}
	public function buku_tamu()
	{
		$data['title'] = 'Buku_Tamu';
		$config['base_url'] = 'https://localhost/radioo/admin/buku_tamu';
		$config['total_rows'] = $this->AdminModel->getCountDataTamu();
		
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

		$data['z'] = $this->AdminModel->getDataTamu($config['per_page'],$data['start']);
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/buku_tamu', $data);
      	$this->load->view('tema/admin/footer');
   
	}

	public function user()
	{
		$data['title'] = 'User';
		$config['base_url'] = 'https://localhost/radioo/admin/user';
		$config['total_rows'] = $this->AdminModel->getCountDataUser();
		
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

		$data['z'] = $this->AdminModel->getDataUser($config['per_page'],$data['start']);
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/user', $data);
      	$this->load->view('tema/admin/footer');
   
	}
	public function tambahGaleri()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'mp3';
		$config['max_size']             = '0';

		$this->upload->initialize($config);
		//$this->form_validation->set_rules('UrlYt', 'Url Youtube', 'trim|required');
		$this->form_validation->set_rules('JudulGaleri', 'Judul Galeri', 'trim|required');
		$this->form_validation->set_rules('DeskripsiGaleri', 'Deskripsi Galeri', 'trim|required');
	
		
		//$this-gitgit>upload->initialize($config);
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
	public function tambahKetegoriGaleri()
	{
		
		$this->form_validation->set_rules('NamaKategori', 'Nama Kategori', 'trim|required');
	
		
		//$this->upload->initialize($config);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Ditambahkan Pastikan Data Terisi Dengan Benar</div>');
			redirect('admin/galeri');	
		} else {
			
				//$namaBerkas = $this->upload->data("file_name");
				$this->AdminModel->tambahKategoriGaleri();
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Ditambahkan</div>');
				redirect('admin/galeri');	
			
		}
	}
	 
	public function tambahJadwal()
	{
		$this->form_validation->set_rules('Judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('Tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('DeskripsiJadwal', 'Deskripsi Jadwal', 'trim|required');
	
		
		//$this->upload->initialize($config);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Ditambahkan Pastikan Data Terisi Dengan Benar</div>');
			redirect('admin/jadwal');	
		} else {
			
				//$namaBerkas = $this->upload->data("file_name");
				$this->AdminModel->tambahJadwal();
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Ditambahkan</div>');
				redirect('admin/jadwal');	
			
		}
	}
	public function tambahPenyiar()
	{
		$config['upload_path']          = './uploads/img';
		$config['allowed_types']        = 'png|jpg';
		$config['max_size']             = 10000;
		$config['max_width'] 			= '500';
		$config['max_height'] 			= '500';
		

		$this->upload->initialize($config);
		$this->form_validation->set_rules('Nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('NoTlp', 'No Telfon', 'trim|required');
		$this->form_validation->set_rules('Biografi', 'Biografi', 'trim|required');
	
		
		//$this->upload->initialize($config);
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
	public function tambahUser()
	{
		$config['upload_path']          = './uploads/img';
		$config['allowed_types']        = 'png|jpg';
		$config['max_size']             = 10000;
		$config['max_width'] 			= '500';
		$config['max_height'] 			= '500';
		

		$this->upload->initialize($config);
		$this->form_validation->set_rules('Nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('Email', 'Email', 'trim|required');
		$this->form_validation->set_rules('NoTlpUser', 'No Tlp', 'trim|required');
		$this->form_validation->set_rules('Password', 'Password', 'trim|required');
		$this->form_validation->set_rules('Password2', 'Konfirmasi', 'required|matches[Password]');
	
		
		//$this->upload->initialize($config);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Ditambahkan Pastikan Data Terisi Dengan Benar</div>');
			redirect('admin/user');	
		} else {
			if(!$this->upload->do_upload('UploadFoto')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Periksa Lagi File Upload</div>');
				redirect('admin/user');	
			} else {
				$namaBerkas = $this->upload->data("file_name");
				$this->AdminModel->tambahUser($namaBerkas);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Ditambahkan</div>');
				redirect('admin/user');
			}
			
					
			
		}
	}	
	public function hapusGaleri($id)
    {
			$this->AdminModel->hapusDataGaleri($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Dihapus</div>');
			redirect('admin/galeri');
    }
	public function hapusJadwal($id)
    {
			$this->AdminModel->hapusDataJadwal($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Dihapus</div>');
			redirect('admin/jadwal');
    }

	public function hapusPenyiar($id)
    {
		
		$this->AdminModel->hapusDataPenyiar($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Dihapus</div>');
		redirect('admin/penyiar');		
    }
	public function hapusUser($id)
    {
			$this->AdminModel->hapusDataUser($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Dihapus</div>');
			redirect('admin/user');
    }

	public function getInfoGaleri()
   {
	 
		echo json_encode($this->AdminModel->getGaleriById($_POST['id']));

   }
   public function getInfoJadwal()
   {
	 
		echo json_encode($this->AdminModel->getJadwalById($_POST['id']));

   }
   public function getInfoTamu()
   {
	 
		echo json_encode($this->AdminModel->getTamuById($_POST['id']));

   }
   public function getInfoPenyiar()
   {
	 
		echo json_encode($this->AdminModel->getPenyiarById($_POST['id']));
		
   }
   public function getCountUser()
   {
	 
		echo json_encode($this->AdminModel->getCountUser($_POST['nilai']));
		
   }
   public function getInfoUser()
   {
	 
		echo json_encode($this->AdminModel->getUserById($_POST['id']));
		
   }
   public function pencarianJadwal()
   {
      echo json_encode($this->AdminModel->cariJadwal($_POST['nilai']));
   }
   public function pencarianPenyiar()
   {
      echo json_encode($this->AdminModel->cariPenyiar($_POST['nilai']));
   }
   
   public function ubahGaleriYt()
   {
	 
	
	$this->form_validation->set_rules('UrlYt', 'Url Youtube', 'trim|required');
	$this->form_validation->set_rules('JudulGaleriYt', 'Judul Galeri', 'trim|required');
	$this->form_validation->set_rules('DeskripsiGaleriYt', 'Deskripsi Galeri', 'trim|required');

	
	//$this->upload->initialize($config);
	if ($this->form_validation->run() == false) {
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Dirubah Pastikan Data Terisi Dengan Benar</div>');
		redirect('admin/galeri');	
	} else {
		
			//$namaBerkas = $this->upload->data("file_name");
			$this->AdminModel->ubahGaleriYt();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Dirubah</div>');
			redirect('admin/galeri');	
		
	}
}

public function ubahGaleri()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'mp3';
		$config['max_size']             = 0;

		$this->upload->initialize($config);
		//$this->form_validation->set_rules('UrlYt', 'Url Youtube', 'trim|required');
		$this->form_validation->set_rules('JudulGaleri', 'Judul Galeri', 'trim|required');
		$this->form_validation->set_rules('DeskripsiGaleri', 'Deskripsi Galeri', 'trim|required');
	
		
		//$this->upload->initialize($config);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Dirubah Pastikan Data Terisi Dengan Benar</div>');
			redirect('admin/galeri');	
		} else {
			if(!$this->upload->do_upload('UploadFile')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Periksa Lagi File Upload</div>');
				redirect('admin/galeri');	
			} else {
				$namaBerkas = $this->upload->data("file_name");
				$this->AdminModel->ubahGaleri($namaBerkas);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Dirubah</div>');
				redirect('admin/galeri');
			}
					
			
		}
	}
	public function ubahJadwal()
	{
		$this->form_validation->set_rules('Judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('Tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('DeskripsiJadwal', 'Deskripsi Jadwal', 'trim|required');
	
		
		//$this->upload->initialize($config);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Ditambahkan Pastikan Data Terisi Dengan Benar</div>');
			redirect('admin/jadwal');	
		} else {
			
				//$namaBerkas = $this->upload->data("file_name");
				$this->AdminModel->ubahJadwal();
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Ditambahkan</div>');
				redirect('admin/jadwal');	
			
		}
	}
	public function ubahPass()
	{
		$this->form_validation->set_rules('Ubahpassword', 'Judul', 'trim|required');
		$this->form_validation->set_rules('Ubahpassword2', 'Konfirmasi', 'required|matches[Ubahpassword]');
		
	
		
		//$this->upload->initialize($config);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Dirubah Pastikan Data Terisi Dengan Benar</div>');
			redirect('admin/user');	
		} else {
			
				//$namaBerkas = $this->upload->data("file_name");
				$this->AdminModel->ubahPass();
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Dirubah</div>');
				redirect('admin/user');	
			
		}
	}
	public function ubahPenyiar()
	{
		$config['upload_path']          = './uploads/img';
		$config['allowed_types']        = 'png|jpg';
		$config['max_size']             = 10000;
		$config['max_width'] 			= '500';
		$config['max_height'] 			= '500';
		

		$this->upload->initialize($config);
		$this->form_validation->set_rules('Nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('NoTlp', 'No Telfon', 'trim|required');
		$this->form_validation->set_rules('Biografi', 'Biografi', 'trim|required');
	
		
		//$this->upload->initialize($config);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Ditambahkan Pastikan Data Terisi Dengan Benar</div>');
			redirect('admin/penyiar');	
		} else {
			if(!$this->upload->do_upload('UploadFoto')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Periksa Lagi File Upload</div>');
				redirect('admin/penyiar');	
			} else {
				$namaBerkas = $this->upload->data("file_name");
				$this->AdminModel->ubahPenyiar($namaBerkas);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Dirubah</div>');
				redirect('admin/penyiar');
			}
					
			
		}
	}
}


