<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_client extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model_client','l_client');
        
    }

	public function index()
	{
		$this->load->view('v_login_client');
	}
	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required',array('required'=>'Username harus diisi lur'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required',array('required'=>'Password harus diisi lur'));
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/login_client'));
		}
		else{
			$this->load->model('login_model_client');
			$cek_login=$this->login_model_client->get_login();
			if($cek_login->num_rows()>0){
				$data_login=$cek_login->row();

				$array = array(
					'id_client' => $data_login->id_client,
					'login'=>true,
					'username' => $data_login->username,
					'password' => $data_login->password
				);
				
				$this->session->set_userdata( $array );
				redirect(base_url('index.php/Dashboard_client'));
			}
			else{
				$this->session->set_flashdata('pesan', 'username dan password ga cocok lur');
				redirect(base_url('index.php/login_client'));

			}
		}
	}
	public function simpan()
    {
        $cekdata = $this->l_client->addUser();
        if ($cekdata) {
          $data['status'] = 1;
          $data['keterangan'] = "Anda sukses menambah data";
          echo json_encode($data);
        }else {
          $data['status'] = 0;
          $data['keterangan'] = "Anda gagal menambah data";
          echo json_encode($data);
        }
    }

}