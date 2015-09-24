<?php

function get_bd(){

	global $db;
	$query = "SELECT * FROM mybd";
	$row = mysqli_query($db, $query);
	
	return $row;

}

?>