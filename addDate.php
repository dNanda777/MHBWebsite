<?php session_start(); include "connectSQL.php";
$applicationID = $_SESSION['applicationID'];
$duration = $_POST["duration"];
//fetch application data:
$SQLdata = mysqli_query($connectSQL, "SELECT * FROM application
  WHERE applicationID = '$applicationID'");
$data=mysqli_fetch_assoc($SQLdata);
//initialize needed value from row
$fromDate = $data['requested_date'];
$residenceID = $data['residenceID'];
//add alocation into database
$newAlocation = mysqli_query($connectSQL,"INSERT INTO alocation
  VALUES('',CAST('". $fromDate ."' AS DATE),$duration,'',$applicationID,
  $residenceID)");
//change application status
$changeStatus = mysqli_query($connectSQL,"UPDATE application
  SET status = 'approved' WHERE application.applicationID = $applicationID");
echo "<meta http-equiv='refresh' content='1;url=
http://localhost/mhb/ViewApplication-Officer.php'>";?>
