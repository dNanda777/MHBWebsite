<!--this connect to database made by Ida Ayu Nanda Dewi Pradnyani-->

<?php
    //
    // session_start();

    $connectSQL = mysqli_connect("localhost", "root", "", "mhb_website");

    if(mysqli_connect_errno($connectSQL))
    {
        echo "Failed to connect ". mysqli_connect_error();
    }
?>
