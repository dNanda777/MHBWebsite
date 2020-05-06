<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?message=notyetloggedin");
  }
  ?>

<title><?php echo $_SESSION['username'] ?>'s Profile</title>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Profile of Applicant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></link>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Micro Housing Booking</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="About.php">About Us</a></li>
			<li><a href="ViewResidence.php">View Residence</a></li>
			<li><a href="ViewApplication.php">View Application</a></li>	
		</ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?php echo $_SESSION['username']; ?>!<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="Profil.php">Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
            </li>   
        </ul>
	</div>
</nav>	

<?php

include '../connectdb.php';

//$password = $_SESSION['password'];
$username = $_SESSION['username'];
$SQL = mysqli_query($connectdb, "SELECT * FROM user_applicant WHERE username ='$username'");
$data = mysqli_fetch_assoc($SQL);
// $data=mysqli_fetch_all($tampil);
?>





    <div class="container">
  <h2>Profil</h2>
  <form class="form-horizontal" action="Profil.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="fullName">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fullName" placeholder="Enter Name" name="fullName" value="<?php echo $data['fullName'] ?>" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $data['email'] ?>" >
      </div>
     </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo $data['username'] ?>" >
      </div>
  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="monthlyIncome">Monthly Income:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="monthlyIncome" placeholder="Enter Monthly Income" name="monthlyIncome" value="<?php echo $data['monthlyIncome'] ?>" >
      </div>
  </div>
 
</div>
</body>
</html>
