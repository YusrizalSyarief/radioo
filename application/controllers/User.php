<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{

		
		// Ambil IP
		$ip = $_SERVER['REMOTE_ADDR'];
		$mydate = getdate(date("U"));
		$newdate = $mydate['mday'] . " - " . $mydate['month'] . " - " . $mydate['year'];
		$this->UserModel->ipAdd($ip , $newdate);

		// Isi Beranda
		$data['title'] = 'Beranda';
		$data['u'] = $this->UserModel->getUserById($this->session->userdata('ID_USER'));
		$data['jadwal'] = $this->UserModel->getJadwal();
		$data['penyiar'] = $this->UserModel->getPenyiar();
		$data['audio'] = $this->UserModel->getAudio();
		$data['stream'] = $this->UserModel->getStream();
		
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/index', $data);
		$this->load->view('tema/modal/modalprofile', $data);
		$this->load->view('tema/modal/modalberanda', $data);
      	$this->load->view('tema/user/footer');
   
	}

	public function galeri()
	{
		
		// $a = $this->input->post('email', true);
		$data['title'] = 'Galeri';
		$data['u'] = $this->UserModel->getUserById($this->session->userdata('ID_USER'));
		$data['kategori'] = $this->UserModel->getKategori0();
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/galeri', $data);
		$this->load->view('tema/modal/modalprofile', $data);
      	$this->load->view('tema/user/footer');
		
		// $this->UserModel->getDataFormat();
   
	}

	public function bukutamu()
	{
		
		$data['title'] = 'Buku Tamu';
		$data['u'] = $this->UserModel->getUserById($this->session->userdata('ID_USER'));
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/bukutamu', $data);
		$this->load->view('tema/modal/modalprofile', $data);
      	$this->load->view('tema/user/footer');
   
	}

	public function pengajuan()
	{
		$this->form_validation->set_rules('namaTamu', 'Nama Tamu', 'trim|required');
		$this->form_validation->set_rules('emailTamu', 'Email Tamu', 'trim|required');
		$this->form_validation->set_rules('isiTamu', 'Isi Tamu', 'trim|required');
	
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('buku', 'Form Harus Lengkap!');
			redirect('user/bukutamu');	
		} else {

			$token = base64_encode(random_bytes(32));
			$user_token = [
				'EMAIL_TOKEN' =>  htmlspecialchars($this->input->post('emailTamu', true)),
				'TOKEN' => $token
			];
			$this->db->insert('user_token', $user_token);
			$this->sendEmail($token, 'bukutamu');
			$this->UserModel->bukuTamu();
					
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
			$this->session->set_flashdata('login', 'Terdapat Kesalahan');
			redirect('user');
		} else {
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'EMAIL_TOKEN' =>  htmlspecialchars($this->input->post('EmailU', true)),
				'TOKEN' => $token
			];
			$this->UserModel->register();
			$this->db->insert('user_token', $user_token);
			$this->sendEmail($token, 'verify');
			$this->session->set_flashdata('login', 'Silahkan Aktivasi Akun Terlebih Dahulu');
			redirect('user','refresh');	
		}
	}

	public function ratingWeb()
	{
		$this->form_validation->set_rules('ratingW', 'Rating Web', 'trim|required');

		$idW = $this->input->post('idW');
		$web = "website";
		if($this->form_validation->run() == false){
			$this->session->set_flashdata('login', 'Mohon lengkapi form sebelum submit');
			redirect('user','refresh');
		} else {

				$this->UserModel->updateRatingW($idW,$web);
				$this->UserModel->komentar();
				$this->session->set_flashdata('login', 'Terimakasih atas Penilaian Anda');
				redirect('user','refresh');
			
		}

	} 

	public function ratingJadwal()
	{
		$this->form_validation->set_rules('ratingJ', 'Rating Jadwal', 'trim|required');

		$idJ = $this->input->post('idUJ');
		$Jadwal = $this->input->post('idJ');
		if($this->form_validation->run() == false){
			$this->session->set_flashdata('login', 'Mohon lengkapi form sebelum submit');
			redirect('user','refresh');
		} else {

				$this->UserModel->updateRatingJ($idJ,$Jadwal);
				$this->UserModel->komentar();
				$this->session->set_flashdata('login', 'Terimakasih atas Penilaian Anda');
				redirect('user','refresh');
			
		}
		
	}

	public function sendEmail($token, $type){
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'radiosuarakotaprobolinggo@gmail.com',
			'smtp_pass' => 'suarakotajos',
			'mailtype'  => 'html', 
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		);
		$this->load->library('email', $config);
		$this->email->initialize($config);
		$this->email->from('radiosuarakotaprobolinggo@gmail.com', 'RSKP TEAM');
		
		if($type == 'verify') {
			$this->email->to($this->input->post('EmailU'));
			$this->email->subject('Account Verification');
			$this->email->message('
			Click this link to verify your account : <a href="'. base_url() .'user/verify?email=' . $this->input->post('EmailU') .'&token=' . urlencode($token) . '">Activate</a>
			');
		
		} else if($type == 'bukutamu'){
			$this->email->to($this->input->post('emailTamu'));
			$this->email->subject('Buku Tamu Verification');
			$this->email->message('
			Click link ini untuk dapat meneruskan pesan anda ke admin : <a href="'. base_url() .'user/verify2?email=' . $this->input->post('emailTamu') .'&token=' . urlencode($token) . '&nama='. $this->input->post('namaTamu') .'&isi='. $this->input->post('isiTamu') .'">Teruskan</a>
			');
		}

		if($this->email->send()){
			return true;
		} else{
			echo $this->email->printing_debugger();
			die;
		}

	}

	public function verify2(){
		
		$nama = $this->input->get('nama'); 
		$isi = $this->input->get('isi');
		$email = $this->input->get('email');
		$token = $this->input->get('token');
		$subToken = substr($token,0,32);
		
		// $user = $this->db->get_where('buku_tamu', ['EMAIL_TAMU' => $email, 'IS_READ' => 0])->row_array();
		
		// if ($user) {
			$user_token = $this->db->get_where('user_token', ['TOKEN' => $token])->row_array();
			if ($user_token) {
				// $this->db->set('IS_READ', 1);
				// $this->db->where('EMAIL_TAMU', $email);
				// $this->db->update('buku_tamu');
				
				$this->db->delete('user_token', ['EMAIL_TOKEN' => $email]);
				
				$this->UserModel->pengajuan($nama, $email, $isi);
				// $this->session->set_flashdata('buku', 'Verifikasi Berhasil');
				// redirect('user/bukutamu','refresh');
			} else {
				$this->session->set_flashdata('buku', 'Verifikasi Token Gagal');
				redirect('user/bukutamu','refresh');
			}
		// } else {
		// 	$this->session->set_flashdata('buku', 'Verifikasi Email Gagal');
		// 	redirect('user/bukutamu','refresh');
		// }
		
	}

	public function verify(){
		
		$email = $this->input->get('email');
		$token = $this->input->get('token');
		$subToken = substr($token,0,32);
		
		$user = $this->db->get_where('user', ['EMAIL' => $email])->row_array();
		
		if ($user) {
			$user_token = $this->db->get_where('user_token', ['TOKEN' => $token])->row_array();
			if ($user_token) {
				$this->db->set('USER_ACTIVE', 1);
				$this->db->where('EMAIL', $email);
				$this->db->update('user');
				
				$this->db->delete('user_token', ['EMAIL_TOKEN' => $email]);
				
				$this->session->set_flashdata('login', 'Verifikasi Berhasil');
				redirect('user','refresh');
			} else {
				$this->session->set_flashdata('login', 'Verifikasi Token Gagal');
				redirect('user','refresh');
			}
		} else {
			$this->session->set_flashdata('login', 'Verifikasi Email Gagal');
			redirect('user','refresh');
		}
		
	}

	public function ubahPro(){
		$config['upload_path']          = './uploads/img';
		$config['allowed_types']        = 'png|jpg';
		$config['max_size']             = 10000;
		$config['max_width'] 			= '1000';
		$config['max_height'] 			= '1000';
		
		$this->upload->initialize($config);
		$this->form_validation->set_rules('namaR', 'Nama', 'trim');
		$this->form_validation->set_rules('emailR', 'Email', 'trim');
		$this->form_validation->set_rules('notlpR', 'Nomor Telp ', 'trim');

		
		//$this->upload->initialize($config);
		// $this->getProfil();
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('login', 'Cek Kembali Data Anda');
			redirect('user', 'refresh');

		} else {
			if(empty($_FILES['UpdateFoto']['name'])) {
				$namaBerkas = $this->input->post('GambarPro', true);
				$this->UserModel->ubahProfil($namaBerkas);
				$this->session->set_flashdata('login', 'Berhasil diupload');
				redirect('user', 'refresh');
				
			} else {
				if (!$this->upload->do_upload('UpdateFoto')) {
					$this->session->set_flashdata('login', 'Gambar Gagal Diupload');
					redirect('user', 'refresh');

				} else {
					$namaBerkas = $this->upload->data("file_name");
					$this->UserModel->ubahProfil($namaBerkas);
					$this->session->set_flashdata('login', 'Berhasil diupload');
					redirect('user', 'refresh');
				}
			}
		}
	}

	public function getKategori(){
		echo json_encode($this->UserModel->getKategori($_POST['kategori']));
	}
	
	public function getProfil(){
		echo json_encode($this->UserModel->getUserById($_POST['id']));
	}

	public function galeriYT()
	{
		
		// $a = $this->input->post('email', true);
		$kate = "youtube";
		$data['title'] = 'Galeri';
		$data['u'] = $this->UserModel->getUserById($this->session->userdata('ID_USER'));
		$data['kategori'] = $this->UserModel->getKategori1($kate);
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/galeri', $data);
		$this->load->view('tema/modal/modalprofile', $data);
      	$this->load->view('tema/user/footer');
		
		// $this->UserModel->getDataFormat();
   
	}

	public function galeriAudio()
	{
		
		// $a = $this->input->post('email', true);
		$kate = "audio";
		$data['title'] = 'Galeri';
		$data['u'] = $this->UserModel->getUserById($this->session->userdata('ID_USER'));
		$data['kategori'] = $this->UserModel->getKategori1($kate);
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/galeri', $data);
		$this->load->view('tema/modal/modalprofile', $data);
      	$this->load->view('tema/user/footer');
		
		// $this->UserModel->getDataFormat();
   
	}

}