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
    <title>View Application of Applicant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></link>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?php echo $_SESSION['username']; ?>!<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="Profil.php">Profile</a></li>
					<li><a href="logout.php">Logout</a></li>
			</li>	
		</ul>
	</div>
</nav>	

<div class="container">
  <h2>Applications</h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Application Date</th>
        <th>Requested Date</th>
        <th>Status</th>
        <th>ApplicantID</th>
        <th>Residence Number</th>
      </tr>

      <?php
            include "../connectdb.php";
            $no = 1;
            $tampil = mysqli_query($connectdb, "SELECT * FROM application");
            while($data=mysqli_fetch_array($tampil))
            {
            ?>
            <tr>
              <td> <?php echo $no++; ?> </td>
              <td> <?php echo $data['applicationDate']; ?> </td>
              <td> <?php echo $data['requested_date']; ?> </td>
              <td> <?php echo $data['status']; ?> </td>
              <td> <?php echo $data['applicantID']; ?> </td>
              <td> <?php echo $data['residenceID']; ?> </td>
            </tr>

              <?php } ?>
    </thead>
  </table>
</div>


</body>
</html>