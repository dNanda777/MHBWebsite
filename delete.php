<?php
    include "$connectSQL.php";
    $Rid = $_GET['residenceID'];
    $SQLdata = mysqli_query($connectSQL, "DELETE FROM residences WHERE residenceID='$Rid'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/mhb/tes_tabel_residences.php'>";
?>
