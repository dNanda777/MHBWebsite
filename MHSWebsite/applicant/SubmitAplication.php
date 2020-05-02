<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?message=notyetloggedin");
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Submit Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
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
  <h2>Submit Application</h2>
  <form class="form-horizontal" action="ViewApplication.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="requested_date">Requested Date:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="requested_date" placeholder="Requested Date" name="requested_date">
      </div>
    </div>
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>

<?php

        include "../connectdb.php";
        if(isset($_POST['submit']))
        {
            $requested_date = $_POST['requested_date'];

            mysqli_query($connectdb, "INSERT INTO application VALUES('$requested_date')") or die(mysqli_error($connectdb));

            echo "<div align='center'><h5> Loading.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/mhswebsite/applicant/ViewApplication.php'>";
        }
?>