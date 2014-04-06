<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class postdata extends CI_Controller {

	public function index(){
		$this->load->model('location_history');
		$fromPost = $this->input->post();
		if($this->location_history->update($fromPost)){
		}else if ($this->location_history->insert($fromPost)){
		}else {echo("Insert/update failed.");
		}
	}
}