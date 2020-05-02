<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In for Housing Officer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    

    <form method="POST" action="loginstaffcheck.php">
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Log In as Staff
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="staffID">StaffID</label>
                        <input type="text" name="staffID" class="form-control col-md-9" placeholder="Saff ID">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control col-md-9" placeholder="Username">
                    </div>


                    <button type="submit" class="btn btn-primary" name="login">LOGIN</button>
                    
                </form>

            </div>
        </div>
    </div>
    </form>


</body>
</html>
