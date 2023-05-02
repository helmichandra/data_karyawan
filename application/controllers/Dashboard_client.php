<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_client extends CI_Controller {


	public function index()
	{

		$data['konten']='v_home_client';
		$this->load->view('V_dashboard_client',$data);
	}
	
	}



?>
