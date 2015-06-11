<?php
	require_once "connection.php";

	$connect = new connection(); 

	$con = $connect->makeConnection(); 

	$query = "SELECT log_date FROM log ORDER BY log_id DESC LIMIT 1";

	$result = mysqli_query($con, $query);

	while($row = mysqli_fetch_array($result))
	{
		echo $row['log_date'];
	}

	mysqli_close($con);
?>