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

		<?php
			require_once "api/connection.php";

			$connect = new connection(); 

			$con = $connect->makeConnection();

			$query = "SELECT * FROM log ORDER BY log_id DESC";

			$result = mysqli_query($con, $query);

			echo "<table class='table table-hover'>";

			echo "<tr>";
				echo "<th>Date</th>";
				echo "<th>Log</th>";
			echo "</tr>";

			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
					echo "<td>" . $row['log_date'] ."</td>";
					echo "<td>" . $row['log_val'] ."</td>";
				echo "</tr>";
			}

			echo "</table>";

			mysqli_close($con);
		?>

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