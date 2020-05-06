<?php
session_start();

include 'connectdb.php';
if (isset($_POST["login"])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
}

$sql = mysqli_query($connectdb, "SELECT * FROM user_applicant WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($sql);

if ($cek==TRUE) {
	$_SESSION['username']=$username;
	$_SESSION['status'] = "login";
	header("location:applicant/index.php");
}else{
	header("location:login.php?failed");
}
/*
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:applicant/index.php");
}else{
	header("location:login.php?failed");
}*/