<?php include('../HF/header.php') ?>
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
  <h2>Residences</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Residence ID</th>
        <th>Bathroom</th>
        <th>Bedroom</th>
        <th>Kitchen</th>
        <th>Monthly Rental</th>
        <th>Address</th>
        <th>Size</th>
      </tr>

      <?php
            include "../connectSQL.php";
            $no = 1;
            $tampil = mysqli_query($connectSQL, "SELECT * FROM residence");
            while($data=mysqli_fetch_array($tampil))
            {
            ?>
            <tr>
              <td> <?php echo $no++; ?> </td>
              <td> <?php echo $data['bathroomNum']; ?> </td>
              <td> <?php echo $data['bedroomNum']; ?> </td>
              <td> <?php echo $data['kitchenNum']; ?> </td>
              <td> <?php echo $data['monthlyRental']; ?> </td>
              <td> <?php echo $data['residenceAddress']; ?> </td>
              <td> <?php echo $data['Size']; ?> </td>
              <td>
                <a href="SubmitAplication.php?residenceID=<?php echo $data
                ['residenceID']; ?>" class="btn btn-sm btn-primary
                ">Submit Appliaction</a>
              </td>
            </tr>

              <?php } ?>
    </thead>
  </table>
</div>


</body>
</html>
