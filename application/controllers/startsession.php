<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class postdata extends CI_Controller {

	public function index(){
		$this->load->model('active_bikun');
		$fromPost = $this->input->post();
		if($this->active_bikun->update($fromPost)){
		}else if ($this->active_bikun->insert($fromPost)){
		}else {
			echo("Insert/update failed.");
		}
	}
}