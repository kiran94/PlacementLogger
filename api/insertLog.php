<?php
	require_once 'connection.php';
	$connect = new connection();

	$con = $connect->makeConnection(); 

	$current_date = date('Y-m-d');

	$query = "INSERT INTO log(log_val, log_date) VALUES ( '{$_POST['log_val']}', '{$current_date}' );";

	echo "{ \"Result\" : \"Success\" }";

	mysqli_query($con, $query) or die("Error Quering");
	mysqli_close($con);
?>