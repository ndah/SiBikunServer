<?php 
	class active_bikun extends CI_Model{
		function __construct()
	    {
	        parent::__construct();
	    }

	    public function record_count() {
	        $this->load->database();
	        return $this->db->count_all('ActiveBikun');
	    }

	    function insert($data){
	    	$this->load->database();
		$query = $this->db->get_where('ActiveBikun', $data["driver"]);
		if($query->num_rows()){
			return false;	    	
	    	}
	    	$this->db->insert('ActiveBikun', $data);
	    	return $this->db->insert_id();
	    }

	    function deactivate($data){
		$this->load->database();
		$driver = $data["driver"];
  	    	$que = "UPDATE ActiveBikun SET bikun=\"0\" WHERE driver=\"".$driver."\"";
	    	$query = $this->db->query($que);
	    	return $this->db->affected_rows();
	    }
	    
	    function activate($data){
		$this->load->database();
		$driver = $data["driver"];
		$bikun = $data["bikun"];
	    	$que = "UPDATE ActiveBikun SET bikun=\"".$bikun."\" WHERE driver=\"".$driver."\"";
	    	$query = $this->db->query($que);
	    	return $this->db->affected_rows();
	    }
	    
	    function addLike($data){
		$this->load->database();
		$driver = $data["driver"];
 	    	$que = "UPDATE ActiveBikun SET likes=likes+1 WHERE driver='".$driver."'";
	    	$query = $this->db->query($que);
	    	return $this->db->affected_rows();
	    }
	    
	    function removeLike($data){
		$this->load->database();
		$driver = $data["driver"];
 	    	$que = "UPDATE ActiveBikun SET likes=likes-1 WHERE driver='".$driver."'";
	    	$query = $this->db->query($que);
	    	return $this->db->affected_rows();
	    }
	    
	    function update($data){
		$this->load->database();
		$to_be_updated = $data["driver"];
		unset($data["driver"]);
	    	
	    	$this->db->where('driver', $to_be_updated);
	    	$this->db->update('ActiveBikun', $data);
	    	return $this->db->affected_rows();
	    }

	    function delete($driver){
	    	$this->load->database();
	    	if(!$driver){
	    		return false;
	    	}
	    	$this->db->where('id', $driver);
	    	$this->db->delete('ActiveBikun');
	    	return $this->db->affected_rows();
	    }

	    //hasil output dari select tinggal di for each saja
	    function selectAll(){
	    	$this->load->database();
	    	$query = $this->db->get('ActiveBikun');
			return $query->result();
	    }
	    
	    function getActiveBikun(){
	    	$this->load->database();
	    	$query = $this->db->query("SELECT bikun FROM ActiveBikun WHERE bikun>0");
	    	$result = $query->result();
	    	$returnValue = array();
	    	var_dump($result);
		foreach ($result as $object) {
	    	    var_dump($object);
   	            array_push($returnValue, $object->bikun);
		}
		return $returnValue;
	    }
	}
?>