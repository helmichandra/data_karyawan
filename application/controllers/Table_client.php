<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_client extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_table_client');
		$this->load->library('form_validation');
	}

	public function index()
	{
		 $data['konten']='v_table_client';
        
        $this->load->model('model_table_client');
        $data['data_data']=$this->model_table_client->getAll();
		$this->load->view('V_dashboard_client',$data, false);
	}

	
	
}
/* End of file table.php */
/* Location: ./application/controllers/table.php */



