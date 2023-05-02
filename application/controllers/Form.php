<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index()
	{
	$data['konten']='tambah_table';	
	$this->load->view('V_dashboard',$data, false);
	}

}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */