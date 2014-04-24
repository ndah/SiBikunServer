<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class getactivedriver extends CI_Controller {

	public function index()
	{
		$query = $this->db->query('SELECT * FROM ActiveBikun');
		$data['rows'] = $query->result_array();
		$this->load->view('getdata', $data);
	}
}