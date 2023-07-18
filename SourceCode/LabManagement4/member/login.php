<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>User's Login</title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap-table.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="../assets/mycustom/css/styles.css">
	


	<!-- datatables -->
	<link rel="stylesheet" type="text/css" href="../assets/datatables/css/jquery.dataTables.min.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/font-awesome.min.css">

	<!-- custom -->

	<!-- toastr -->
	<link rel="stylesheet" type="text/css" href="../assets/toastr/css/toastr.css">


</head>
<body class="index-body login">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid" style="background-color: #971016">
			<div class="navbar-header" style="background-color: #971016">
				
				<img src="bsu-logo.png" alt="BSU Logo" style="float:left; margin-top: 7px; margin-right: 5px; height: 35px; width: 37px;">
				<a class="navbar-brand" href="#">SCIENCE LABORATORY INVENTORY MANAGEMENT SYSTEM</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>	

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container-fluid">
	<div class="panel" style="max-width: 300px; margin: 0 auto;">
		<div class="panel-body">
			<div class="col-md-12">
				<form class="frm_memberlogin">
					<h4 class="alert bg-primary text-center">Borrower Login</h4>
					<div class="form-group">
						<label for="id_number">ID Number</label>
						<input type="number" id="id_number" name="id_number" class="form-control" autofocus="on">
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-block">Log in</button>
					</div>
					<div class="text-center">
						<div>
							<a href="../" class="d-inline-block mb-2">Go to Admin Panel</a>
						</div>
						<div>
							<a href="signup">Don't have an account yet? Sign up</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



			</div>

		</div>
	</div>
	
</div>



<?php include 'footer.php'; ?>

<!-- javascript -->
	<script type="text/javascript" src="assets/custom/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="assets/custom/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/toastr/js/toastr.min.js"></script>
	<script type="text/javascript" src="assets/mycustom/js/login.js"></script>
</body>
</html>