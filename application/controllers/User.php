<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';
		
      	$this->load->view('tema/user/header');
          $this->load->view('user/index');
      	$this->load->view('tema/user/footer');
   
	}

	


}
