<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register and Log In User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Register
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control col-md-9" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control col-md-9" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control col-md-9" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" name="fullName" class="form-control col-md-9" placeholder="Full Name">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                    
                </form>

            </div>
        </div>
    </div>


</body>
</html>

<?php

        include "connectdb.php";
        if(isset($_POST['submit']))
        {
            $username       = $_POST['username'];
            $password       = $_POST['password'];
            $email          = $_POST['email'];
            $fullName       = $_POST['fullName'];

            mysqli_query($connectdb, "INSERT INTO user VALUES('',
                '$username','$password', '$email', '$fullName')") or die(mysqli_error($connectdb));

            echo "<div align='center'><h5> Saving Data.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/mhswebsite/applicant/index.php'>";
        }
?>