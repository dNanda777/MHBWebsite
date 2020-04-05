<!--this connect to database made by Febrilia Eka Putri-->
<?php

$connectdb = mysqli_connect("localhost","root","","mhswebsite");

//check connection
if(mysqli_connect_errno()){
	echo "koneksi database gagal : " . mysqli_connect_errno();
}

?>
