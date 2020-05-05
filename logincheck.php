<?php
session_start();

include 'connectSQL.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($connectSQL, "SELECT * FROM user_applicant WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:applicant/index.php");
}else{
	header("location:login.php?pesan=gagal");
}
