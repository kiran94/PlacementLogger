<?php

	require_once 'api/connection.php';
	$connect = new connection();

	$con = $connect->makeConnection(); 

	$current_date = date('Y-m-d');

	$query = "SELECT log_date FROM log ORDER BY log_id DESC LIMIT 1";

	$result = mysqli_query($con, $query);

	while($row = mysqli_fetch_array($result))
	{
		if($row['log_date'] == $current_date)
		{
			echo "<div class='row'><div class='col-xs-12'>";
			echo '<div class="alert alert-success" role="alert">Successfully Logged Today</div>';
			echo "</div></div>";
		}
	}

	mysqli_close($con);
?>