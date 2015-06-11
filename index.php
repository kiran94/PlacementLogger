<!DOCTYPE html> 
<html lang='en'>
<head>
	<title>Home | Placement Logger</title>

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
				  <li role="presentation" class="active"><a href="#">Home</a></li>
				  <li role="presentation"><a href="history.php">Past Logs</a></li>
				</ul>
				<!-- END NAV -->
			</div>
		</div>
		<!-- END ROW -->

		<?php
			require_once "checkTodayLog.php";
		?>

		<!-- NOTIFICATION -->
		<div class='row' id='notification'>
			<div class='col-xs-12'>
				<div class="alert alert-success" role="alert">Successfully Logged Today</div>
			</div>
		</div>
		<!-- END NOTIFICATION -->


		<!-- ROW -->
		<div class='row'>
			<div class='col-xs-12'>

				<!-- FORM -->
				<form id='log_form'>
					<h3>Enter Log:</h3>

					<textarea type='text' name='log_val' id='log_field'	></textarea>

					<br />
					<br />

					<button type="button" class="btn btn-primary" id="log_submit">Submit</button>
				</form>
				<!-- END FORM -->

			</div>
		</div>
		<!-- END ROW -->
	</div>
	<!-- END CONTAINER -->

	<!-- SCRIPTS -->
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="scripts/insertLog.js"></script>
	<!-- END SCRIPTS -->
</body>
</html>