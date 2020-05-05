<?php

include '../connectSQL.php';

session_start();
$officerID = $_SESSION['officerID'];
$officerusername = $_SESSION['username'];
$SQLdata = mysqli_query($connectSQL, "SELECT * FROM user_officer WHERE username ='$officerusername' AND officerID = '$officerID'");
$data = mysqli_fetch_assoc($SQLdata);
// $data=mysqli_fetch_all($tampil);
?>

<title><?php echo $_SESSION['username'] ?>'s Profile</title>
<!-- style placed in the header.php -->
<?php include('../HF/header.php') ?>
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
					<ul class="dropdown-toggle">
						<li><a href="Profil.php">Profile</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
    <h3>Personal Information | <a href="#">Edit Profile</a></h3>

    <!-- show profile data from database -->
    <table>
      <tr>
        <td>Full Name:</td><td><?php echo $data['fullName'] ?></td>
      </tr>
      <tr>
        <td>email:</td><td><?php echo $data['email'] ?></td>
      </tr>
      <tr>
        <td>Your current staff ID:</td><td><?php echo $data['staffID'] ?></td>
      </tr>
    </table>
  </body>
</html>
