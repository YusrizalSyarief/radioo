<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aha extends CI_Controller {

	public function index()
	{
		
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/index');
      	$this->load->view('tema/admin/footer');
   
	}
}
