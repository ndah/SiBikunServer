<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class getlokasibikun extends CI_Controller {

	public function index()
	{
		$query = $this->db->query('SELECT * FROM SiBikun');
		$data['rows'] = $query->result_array();
		$this->load->view('getdata', $data);
	}
}