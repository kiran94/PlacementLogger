<!DOCTYPE html> 
<html lang='en'>
<head>
	<title>Placement Logger</title>

	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="styles/custom.css" />
</head>
<body>
	<!-- CONTAINER -->
	<div class='container'>
		<!-- ROW -->
		<div class='row'>
			<div class='col-xs-12'>
				<h1>Placement Logger</h1>
				<hr />
			</div>
		</div>
		<!-- END ROW -->


		<!-- ROW -->
		<div class='row'>
			<div class='col-xs-12'>
				<form id='log_form'>
					<h3>Enter Log:</h3>

					<input type='text' name='log_val' id ='log_field'/>

					<br />
					<br />

					<button type="button" class="btn btn-primary" id="log_submit">Submit</button>
				</form>
			</div>
		</div>
		<!-- END ROW -->


	</div>
	<!-- END CONTAINER -->

	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="scripts/insertLog.js"></script>
</body>
</html>