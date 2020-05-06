<?php
session_start();

include 'connectSQL.php';

$staffID = $_POST['staffID'];
$username = $_POST['username'];

//try to get officer ID
$row = mysqli_query($connectSQL,
"SELECT * FROM user_officer WHERE staffID='$staffID' and username='$username'");

$SQLdata = mysqli_fetch_assoc($row);
$officerID = $SQLdata['officerID'];

$cek = mysqli_num_rows($row);
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['officerID']= $officerID;
	$_SESSION['status'] = "login";
	header("location:staff/index.php");
	// header("location:addNewResidence.php");
}else{
	header("location:login.php?message=failed");
}
