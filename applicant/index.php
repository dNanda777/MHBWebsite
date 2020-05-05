<?php include ('../HF/headerMHB.php')?>
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
