<!DOCTYPE html> 
<html lang='en'>
<head>
	<title>History | Placement Logger</title>

	<!-- META -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- END META -->

    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="styles/custom.css" />
    <!-- END STYLES -->
</head>
<body>
	<!-- CONTAINER -->
	<div class='container'>
		<!-- ROW -->
		<div class='row'>
			<div class='col-xs-12'>
				<h1>Placement Logger</h1>
				<!-- NAV -->
				<ul class="nav nav-tabs">
				  <li role="presentation"><a href="index.php">Home</a></li>
				  <li role="presentation" class="active"><a href="history.php">Past Logs</a></li>
				</ul>
				<!-- END NAV -->
			</div>
		</div>
		<!-- END ROW -->

		<br/>

		<!-- TABLE ROW -->
		<div class='row'>

			<!-- TABLE -->
			<div class='col-xs-12 col-sm-10'>
				<?php
					require_once "api/connection.php";
					require_once "HistoryFormat.php";

					//Create connection object
					$connect = new connection(); 

					//Make a connection to the database
					$con = $connect->makeConnection();

					//Build query to get logs
					$query = "SELECT * FROM log ORDER BY log_id DESC";

					//Execute query
					$result = mysqli_query($con, $query);

					//Table Markup
					echo "<table class='table table-hover'>";

					//Create HistoryFormat object
					$monthDe = new monthDetails(); 
					$currentMonth = "";

					//For each row markup the data. 
					while($row = mysqli_fetch_array($result))
					{
						//Get current Date
						$currentDate = $row['log_date']; 

						$month_no = substr($currentDate, 5, 2);
						//Get the month name of the month number. 	
						$newMonth = $monthDe->getMonth($month_no); 

						if($newMonth != $currentMonth)
						{
							$currentMonth = $newMonth; 
							echo "<tr id='" . $currentMonth . "'>";
							echo "<td><h3>" . $newMonth ."</h3></td>";
							echo "<td></td>";
							echo "</tr>";

							//Table headers
							echo "<tr>";
								echo "<th>Date</th>";
								echo "<th>Log</th>";
							echo "</tr>";
						}
						
						echo "<tr>";
							echo "<td>" . $currentDate ."</td>";
							echo "<td>" . $row['log_val'] ."</td>";
						echo "</tr>";

					
					}

					//End table
					echo "</table>";

					//Close connection. 
					mysqli_close($con);
				?>
			</div>
			<!-- END TABLE -->

			<div class='col-xs-12 col-sm-2' id='month_links'>
				<ul>
					<?php 
						for($i=1; $i<=12; $i++)
						{
							$currentMonth = $monthDe->getMonth($i);
							echo "<li><a href='#" . $currentMonth . "'>" . $currentMonth ."</a></li>";
						}
					?>
				</ul>
			</div>
		</div>
		<!-- END TABLE ROW -->

		<!-- FOOTER -->
		<?php require_once "footer.php" ?>
		<!-- END FOOTER -->

		
	</div>
	<!-- END CONTAINER -->

	<!-- SCRIPTS -->
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="scripts/insertLog.js"></script>
	<!-- END SCRIPTS -->
</body>
</html>