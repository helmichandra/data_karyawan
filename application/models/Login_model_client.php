<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model_client extends CI_Model {

	public function get_login()
	{
		return $this->db
		->where('username', $this->input->post('username'))
		->where('username', $this->input->post('username'))
		->get('client');

	}
	public function addUser()
    {
        $object = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $sqlTambah = $this->db->insert('client', $object);
        return $sqlTambah;
    }

}
