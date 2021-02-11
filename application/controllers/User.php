<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Beranda';
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/index');
      	$this->load->view('tema/user/footer');
   
	}

	public function galeri()
	{
		$data['title'] = 'Galeri';
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/galeri');
      	$this->load->view('tema/user/footer');
   
	}

	public function bukutamu()
	{
		$data['title'] = 'Buku Tamu';
		
      	$this->load->view('tema/user/header', $data);
        $this->load->view('user/bukutamu');
      	$this->load->view('tema/user/footer');
   
	}


}