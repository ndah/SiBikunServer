<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class endsession extends CI_Controller {

	public function index(){
		$this->load->model('active_bikun');
		$fromPost = $this->input->post();
		if($this->active_bikun->deactivate($fromPost["driver"])){
		}
		$this->load->model('location_history');
		if($this->location_history->delete($fromPost["driver"])){
		}
	}
}