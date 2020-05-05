<?php
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>

	<title>Staff Page</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Micro Housing Booking</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#">About Us</a></li>
				<li><a href="../addNewResidence.php">Add New Residence</a></li>
				<li><a href="../ViewResidence.php">View Residence</a></li>
				<li><a href="../ViewApplication-Officer.php">View Application</a></li>
				<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?php echo $_SESSION['username']; ?>!<span class="caret"></span></a>
					<ul>
						<li><a href="Profil.php">Profile</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

	<br>

	<center><h3>Staff Page of MHSWebsite</h3></center>

	<br>

	<?php	if($_SESSION['status']!="login"){
		header("location:../index.php?message=notyetloggedin");
	}
	?>

	<center><h4>Welcome, <?php echo $_SESSION['username']; ?>! You already
		logged in</h4></center>
<br>
</body>
</html>
