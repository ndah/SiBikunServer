<?php
$response = array();
if (isset($_GET['start_time'])){
	$start_time = $_GET['start_time'];
	$con = mysql_connect('localhost', 'aquirkyq_sibikun', 'sibikun') or die(mysql_error());
	$selected = mysql_select_db("aquirkyq_bikun", $con);
	$result = mysql_query("SELECT * FROM SiBikun WHERE `start_time` = $start_time");
	while ($row = mysql_fetch_array($result)) {
		
	}
	mysql_close($con);
} else {
}
?>