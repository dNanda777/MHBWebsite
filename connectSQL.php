<?php
    $connectSQL = mysqli_connect("localhost", "root", "", "mhb website");

    if(mysqli_connect_errno($connectSQL))
    {
        echo "Koneksi Gagal ". mysqli_connect_error();
    }
?>
