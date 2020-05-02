<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?message=notyetloggedin");
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>About Page of Applicant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></link>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="Index.php">Micro Housing Booking</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="About.php">About Us</a></li>
			<li><a href="ViewResidence.php">View Residence</a></li>
			<li><a href="ViewApplication.php">View Application</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?php echo $_SESSION['username']; ?>!<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="Profil.php">Profile</a></li>
					<li><a href="logout.php">Logout</a></li>
			</li>	
		</ul>
	</div>
</nav>	


<div class="container">
  <h3>Micro Housing Booking</h3>
  <p>Micro-housing System: One Solution into Millennials' Housing Crisis is a project developed to provide information regarding micro-housing in Kuala Lumpur. The micro-housing itself is a help offered by Kuala Lumpur City Hall (DBKL) by providing affordable rental prices.
Through this project, we help these young people to make it easier for them to find information about the right housing in accordance with their budget.
</p>
</div>

</body>
</html>