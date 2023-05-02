<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout_client extends CI_Controller {

	public function index()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/login_client'),'refresh');	
	}
}

/* End of file Logout_client.php */
/* Location: ./application/controllers/Logout_client.php */