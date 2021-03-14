<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

     public function index(){
		$this->_login();
	}
	private function _login(Type $var = null)
	{
		$email = $this->input->post('emailL');
		$password = $this->input->post('passwordL');
		
		$user = $this->db->get_where('user', ['EMAIL' => $email])->row_array();
		
		// jika user ada
		if($user) {
			// jika user aktif
			if($user['USER_ACTIVE'] == 1){
				// cek password
				if(password_verify($password ,$user['PASSWORD'])){

					$data = [
						'EMAIL' => $user['EMAIL'],
						'ID_ROLE' => $user['ID_ROLE'],
						'ID_USER' => $user['ID_USER'],
                        'NAMA' => $user['NAMA'],
                        'GAMBAR' => $user['GAMBAR']
					];
					$this->session->set_userdata('ID_USER', $user['ID_USER']);
					$this->session->set_userdata($data);

					// cek role
					if($user['ID_ROLE'] == 1){
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Login Berhasil</div>');
						redirect('admin');
					} else if($user['ID_ROLE'] == 2) {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Login Berhasil </div>');
						redirect('admin');
					} else {
						$this->session->set_flashdata('login', 'Berhasil Login');
						redirect('user','refresh');
						
					}
				
				} else {
					$this->session->set_flashdata('login', 'Password Salah!');
			        redirect('user','refresh');
					

				}
				
			} else {
                $this->session->set_flashdata('login', 'Akun Belum diaktivasi!');
			    redirect('user','refresh');
				
				//echo "Akun Belum Aktif!";
			}
		} else{
            $this->session->set_flashdata('login', 'Akun Belum Terdaftar!');
			redirect('user','refresh');
			
			//echo "Tidak Ada Akun !";
		}
	}
	public function logout()
    {
		$this->session->sess_destroy();
		$this->session->set_flashdata('login', 'Berhasil Log Out');
        redirect('user','refresh');
		
    }
}
