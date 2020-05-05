<!-- header by defaults -->
<title>View Application</title>
<?php include('../HF/headerMHB.php')?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Micro Housing Booking</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="AboutMHB.php">About Us</a></li>
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
        <th>Residence's Monthly Rental</th>
      </tr>

      <?php
            include "../connectSQL.php";
            // $no = 1;
            $tampil = mysqli_query($connectSQL, "SELECT * FROM application");
            while($data=mysqli_fetch_array($tampil))
            {
            ?>

            <tr>
              <td> <?php echo $data['applicationID']; ?> </td>
              <td> <?php echo $data['applicationDate']; ?> </td>

							<td> <?php echo $data['requested_date']; ?>
							</td>

              <td> <?php echo $data['status']; ?> </td>

							<!-- still trying to figure this out -->
              <td> <?php echo $data['applicantID']; ?> </td>

							<!-- for now, residence ID, later will be the other fields-->
							<td> <?php echo $data['residenceID']; ?></td>
						</tr>
					<?php } ?>

    </thead>
  </table>
</div>


</body>
</html>
