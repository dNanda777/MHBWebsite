<!DOCTYPE html>
<html>
<head>

    <title>Applicant Page</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>
	<br/>
	<br/>
	<br/>

	<center><h2>Applicant Page of MHSWebsite</h2></center>

	<br/>

	<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?message=notyetloggedin");
	}
	?>

	<center><h4>Welcome to MHSWebsite</h4></center>
	<a href="http://localhost/mhswebsite/tes_tabel_residences.php" class="btn btn-sm">View Residences</a>
  <nav class="navbar navbar-default">
  	<div class="container-fluid">
  		<div class="navbar-header">
  			<a class="navbar-brand" href="index.php">Micro Housing Booking</a>
  		</div>
  		<ul class="nav navbar-nav">
  			<li><a href="AboutMHB.php">About Us</a></li>
  			<li><a href="ViewResidence.php">View Residence</a></li>
  			<li><a href="ViewApplication.php">View Application</a></li>
  			<li class="dropdown"><a class="dropdown-toggle" data-toggle=
          "dropdown" href="#">Welcome, <?php echo $_SESSION['username']; ?>!
          <span class="caret"></span></a>
  				<ul class="dropdown-menu">
  					<li><a href="Profil.php">Profile</a></li>
  					<li><a href="logout.php">Logout</a></li>
  			</li>
  		</ul>
  	</div>
  </nav>
	<center>
    <h2><b>Applicant Page of MHSWebsite</b></h2>
    </br>
  </center>
    <center>Welcome to MHSWebsite</center>
</body>
</html>
