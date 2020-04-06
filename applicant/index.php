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

	<center>
    <h4>Welcome to MHSWebsite</h4>
    <a href="http://localhost/mhb/tes_tabel_residences.php" class="btn btn-sm">View Residences</a>
  </center>





</body>
</html>
