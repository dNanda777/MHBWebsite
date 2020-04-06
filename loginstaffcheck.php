<?php
session_start();

include 'connectdb.php';

$staffID = $_POST['staffID'];
$username = $_POST['username'];

$data = mysqli_query($connectdb, "SELECT * FROM housingofficer WHERE staffID='$staffID' and username='$username'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:staff/index.php");
}else{
	header("location:login.php?message=failed");
}