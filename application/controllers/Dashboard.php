<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{

		$data['konten']='v_home';
		$this->load->view('V_dashboard',$data);
	}
	
	}



?>
