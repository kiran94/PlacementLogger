<?php
	class log
	{
		public $date; 
		public $val; 
	}
	
	require_once "connection.php";
	$connectdb = new connection(); 

	$con = $connectdb->makeConnection(); 

	$query = "SELECT * FROM log"; 

	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result); 
	$index = 0; 
	$items = array();
	//echo json_encode($result);

	// echo "{\"data\" :[";
	while($row = mysqli_fetch_array($result))
	{
		$l = new log(); 

		$l->date = $row['log_date'];
		$l->val = $row['log_val'];

		$items[] = $l;
	}

	echo json_encode($items);

	mysqli_close($con);
?>