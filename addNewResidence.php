<title>Add New Residence</title>
<?php
session_start();
include ('HF/header.php')?>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Add new residence
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

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
        </div>
    </div>


</body>
</html>

<?php

		// session_start();

		include "connectSQL.php";
		// include "loginstaffcheck.php";
		// 		echo $_SESSION['officerID'];
				//using username of current session from officer

				// $officer = mysqli_query($connectSQL,"SELECT * FROM user_officer WHERE
				// 	username = $_SESSION['username']") or die(mysqli_error($connectSQL));
        if(isset($_POST['save']))
        {
            $residenceAddress       = $_POST ['address'];
            $Size       = $_POST['size'];
            $bedroomNum     = $_POST['bedroomNum'];
						$kitchenNum       = $_POST['kitchenNum'];
            $bathroomNum       = $_POST['bathroomNum'];
            $monthlyRental     = $_POST['monthlyRental'];
						// $officer 				 = $_SESSION['username'];

            mysqli_query($connectSQL, "INSERT INTO residence VALUES('',
              '$residenceAddress','$Size', '$bedroomNum', '$kitchenNum',
							'$bathroomNum','$monthlyRental','')") or die
							 (mysqli_error($connectSQL));

            echo "<div align='center'><h6> Loading... </h6></div>";
            //echo "<h5>DONE</h5>";
            echo "<meta http-equiv='refresh' content='1;url=
						http://localhost/mhb/viewResidence.php'>";
        }
?>
