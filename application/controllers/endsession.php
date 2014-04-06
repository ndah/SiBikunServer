<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class postdata extends CI_Controller {

	public function index(){
		$this->load->model('active_bikun');
		$fromPost = $this->input->post();
		if($this->active_bikun->delete($fromPost["id"])){
		} else {echo("Delete failed (active).");
		}
		$this->load->model('location_history');
		if($this->location_history->delete($fromPost["id"])){
		} else {echo("Delete failed (history).");
		}
	}
}