=======
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>

	<title>Staff Page</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>
	<br/>
	<br/>
	<br/>


	<center><h2>Staff Page of MHSWebsite</h2></center>

	<br/>

	<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?message=notyetloggedin");
	}
	?>

	<center><h4>Welcome, <?php echo $_SESSION['username']; ?>! You already logged in</h4></center>

	<br/>
	<br/>

	
</body>
</html>