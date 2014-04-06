<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class postdata extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->model('location_history');
		$fromPost = $this->input->post();
		if($this->location_history->update($fromPost)){
		}else if ($this->location_history->insert($fromPost)){
		}else {echo("Insert/update failed.")}
	}
}