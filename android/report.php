<?php
$response = array();

if (isset($_POST['start_time']) && isset($_POST['lat']) && isset($_POST['lng'])){
	$start_time = $_POST['start_time'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	$con = mysql_connect('localhost', 'aquirkyq_sibikun', 'sibikun') or die(mysql_error());
	$selected = mysql_select_db("aquirkyq_bikun", $con);
	if(isset($_POST['rute']) && isset($_POST['no_bikun'])){
		$result = mysql_query("INSERT INTO `SiBikun` VALUES `lat` = $lat,`lng` = $lng `start_time` = $start_time `no_bikun` = $no_bikun `rute`= $rute" );
	}
	if($result){
		$response["success"] = 1;
		$response["message"] = "Successfully inserted.";
		echo json_encode($response);
	}
	else{
		$result = mysql_query("UPDATE `SiBikun` SET `lat`=$lat,`lng` = $lng WHERE `start_time`= $key");
		if($result){
			$response["success"] = 1;
			$response["message"] = "Successfully updated.";
			echo json_encode($response);
		}
		else{
			$response["success"] = 0;
			$response["message"] = "Update failure.";
			echo json_encode($response);
		}
	}
	mysql_close($con);
}else{
	$response["success"] = 0;
	$response["message"] = "Incomplete data.";
	echo json_encode($response);
}
?>