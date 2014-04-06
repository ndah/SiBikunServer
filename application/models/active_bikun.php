<?php 
	class active_bikun	extends CI_Model{
		function __construct()
	    {
	        parent::__construct();
	    }

	    public function record_count() {
	        $this->load->database();
	        return $this->db->count_all('ActiveBikun');
	    }

	    function insert($data=array()){
	    	$this->load->database();
		$query = $this->db->get_where('ActiveBikun', $data["id"])
		if($query->num_rows()){
			return false;	    	
	    	}
	    	$this->db->insert('ActiveBikun', $data);
	    	return $this->db->insert_id();
	    }

	    function update($data){
		$this->load->database();
		$to_be_updated = $data['id'];
		unset($data['id']);
	    	
	    	$this->db->where('id', $to_be_updated);
	    	$this->db->update('ActiveBikun', $data);
	    	return $this->db->affected_rows();
	    }

	    function delete($id){
	    	$this->load->database();
	    	if(!$id){
	    		return false;
	    	}
	    	$this->db->where('id', $id);
	    	$this->db->delete('ActiveBikun');
	    	return $this->db->affected_rows();
	    }

	    //hasil output dari select tinggal di for each saja
	    function selectAll(){
	    	$this->load->database();
	    	$query = $this->db->get('ActiveBikun');
			return $query->result();
	    }
	}
?>