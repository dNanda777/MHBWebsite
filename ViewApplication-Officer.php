<?php include('HF/headerMHB.php') ?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="staff/index.php">Micro Housing Booking</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="About.php">About Us</a></li>
			<li><a href="addNewResidence.php">Add New Residence</a></li>
			<li><a href="ViewResidence.php">View Residence</a></li>
			<li><a href="#">View Application</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?php echo $_SESSION['username']; ?>!<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="staff/Profil.php">Profile</a></li>
					<li><a href="logout.php">Logout</a></li>
				</u>
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
            include "connectSQL.php";
            // $no = 1;
            $tampil = mysqli_query($connectSQL, "SELECT * FROM application");
            while($data=mysqli_fetch_array($tampil))
            {
							// $data['requested_date'] = $_GET['requested_date'];
							// $data['$residenceID'] = $_GET['residenceID'];
            ?>

            <tr>
              <td> <?php echo $data['applicationID']; ?> </td>
              <td> <?php echo $data['applicationDate']; ?> </td>
							<td> <?php echo $data['requested_date']; ?></td>
              <td> <?php echo $data['status']; ?> </td>
							<!-- not done: relating with database -->
              <td> <?php echo $data['applicantID']; ?> </td>
							<td> <?php echo $data['residenceID']; ?>
							</td>
							<td>
								<a
								href="AlocateHousing.php?requested_date=<?php echo $data['requested_date']; ?>&aID=<?php echo $data['applicationID'];
								$_SESSION['applicationID']=$data['applicationID']?>"
									class="btn btn-sm btn-primary">Alocate</a>
									<?php
								}
								?>
							</td>
						</thead>
					</table>
				</div>
				</body>
				</html>
