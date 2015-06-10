<?php 
	class connection
	{	
		//Function makes a connection to the database. 
		public function makeConnection()
		{
			require_once "connection_info.php";

			$con = mysqli_connect($host, $username, $password);
			mysqli_select_db($con, $db);
			return $con; 
		}
	}
?>