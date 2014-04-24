<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class postdata extends CI_Controller {

	public function index(){
		$fromPost = $this->input->post();
		$this->load->model('active_bikun');
		$active = $this->active_bikun->getActiveBikun();
		if(in_array($fromPost["id"], $active, FALSE)){
//			echo("Active.");
			$this->load->model('location_history');
			if($this->location_history->update($fromPost)){
//				echo("Update.");
			}else if ($this->location_history->insert($fromPost)){
//				echo("Insert.");
			}else {echo("Insert/update failed.");}
		}
	}
}