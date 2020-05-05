<?php
  session_start();

    include "connectSQL.php";

    $applicationID = $_SESSION['applicationID'];
    $duration = $_POST["duration"];

    //fetch application data:
    $SQLdata = mysqli_query($connectSQL, "SELECT * FROM application WHERE applicationID = '$applicationID'");
    $data=mysqli_fetch_assoc($SQLdata);

    //initialize needed value from row
    $fromDate = $data['requested_date'];
    $residenceID = $data['residenceID'];

    //add alocation into database
    // $query = mysqli_query($connectSQL,"SELECT DATEADD (month, $duration, $fromDate) FROM application WHERE applicationID = $applicationID ");
    $newAlocation = mysqli_query($connectSQL,"INSERT INTO alocation VALUES('',CAST('". $fromDate ."' AS DATE),$duration,'',$applicationID,$residenceID)");

    //change application status
    $changeStatus = mysqli_query($connectSQL,"UPDATE application SET status = 'approved' WHERE application.applicationID = $applicationID");

    //store endDate to session - failed
    // $_SESSION['endDate'] = mysqli_query($connectSQL,"SELECT DATEADD (month, $duration, $fromDate) FROM application WHERE applicationID = $applicationID as endDate");
    // make a new alocation - failed
    // $_SESSION['alocation'] = mysqli_query($connectSQL,"INSERT INTO alocation VALUES()");
    //test out stored data

    // echo $fromDate;
    // echo $duration;
    // echo $data2;
    //
    echo "<meta http-equiv='refresh' content='1;url=
    http://localhost/mhb/ViewApplication-Officer.php'>";
    ?>
