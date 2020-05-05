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
    <div class="container">
			<h4>Add new residence</h4>
            <div class="card-body">
                <form class="form-horizontal" action="viewResidence.php" >
                    <div class="form-group">
                        <label for="Address">address</label>
                        <input type="text" name="address" class="form-control
												 col-md-7" placeholder="e.g. Block A">
                    </div>

                    <div class="form-group">
                        <label for="Size">size</label>
                        <input type="number" name="size" class="form-control
												 col-md-7" placeholder="e.g. 1 acre">
                    </div>

                    <div class="form-group">
                        <label for="Bedrooms">bedrooms</label>
                        <input type="number" name="bedroomNum" class="
												form-control col-md-7" placeholder="Number of bedrooms">
                    </div>

										<div class="form-group">
                        <label for="Kitchens">kitchens</label>
                        <input type="number" name="kitchenNum" class="
												form-control col-md-7" placeholder="Number of kitchens">
                    </div>

										<div class="form-group">
                        <label for="Bathrooms">bathrooms</label>
                        <input type="number" name="bathroomNum" class=
												"form-control col-md-7" placeholder="
												Number of bathrooms">
                    </div>

										<div class="form-group">
                        <label for="Monthly Rental">monthlyRental</label>
                        <input type="number" name="monthlyRental" class="
												form-control col-md-7" placeholder="Price of rental
												per month">
                    </div>

                    <button type="submit" class="btn btn-primary" name="save">
											SAVE</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
                </form>
    </div>


</body>
</html>

<?php

        include "connectSQL.php";
        if(isset($_POST['save']))
        {
            $address       = $_POST['address'];
            $size       = $_POST['size'];
            $bedrooms     = $_POST['bedroomNum'];
						$kitchens       = $_POST['kitchenNum'];
            $bathrooms       = $_POST['bathroomNum'];
            $monthlyRental     = $_POST['monthlyRental'];

            mysqli_query($connectSQL, "INSERT INTO residences VALUES('',
              '$address','$size', '$bedrooms', '$kitchens', '$bathrooms',
							 '$monthlyRental')") or die(mysqli_error($connectSQL));

            echo "<div align='center'><h6> Loading... </h6></div>";
            //echo "<h5>DONE</h5>";
            echo "<meta http-equiv='refresh' content='1;url=
						http://localhost/mhb/tes_tabel_residences.php'>";
        }
?>
