<!DOCTYPE html>
<html lang="en">
<head>
	<title>  BETA - add new residence </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Add new residence
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="Address">address</label>
                        <input type="text" name="address" class="form-control col-md-7" placeholder="e.g. Kuala Lumpur City">
                    </div>

                    <div class="form-group">
                        <label for="Unit Numbers">unitNum</label>
                        <input type="number" name="unitNum" class="form-control col-md-7" placeholder="Number of bedrooms in total">
                    </div>

                    <div class="form-group">
                        <label for="Floor Number">floorNum</label>
                        <input type="number" name="floorNum" class="form-control col-md-7" placeholder="Number of floors in total">
                    </div>

                    <button type="submit" class="btn btn-primary" name="save">SAVE</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
                </form>

            </div>
        </div>
    </div>


</body>
</html>

<?php

        include "connectSQL.php";
        if(isset($_POST['save']))
        {
            $address       = $_POST['address'];
            $unitNum       = $_POST['unitNum'];
            $floorNum     = $_POST['floorNum'];

            mysqli_query($connectSQL, "INSERT INTO residences VALUES('',
              '$address','$unitNum', '$floorNum')") or die(mysqli_error($connectSQL));

            //echo "<div align='center'><h6> Loading... </h6></div>";
            echo "<h5>DONE</h5>";
            //echo "<meta http-equiv='refresh' content='1;url=http://localhost/csw202/praktik-crudcustomer/data_customer.php'>";
        }
?>
