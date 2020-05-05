<?php
include('HF/header.php');
?>
    <meta charset="UTF-5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Residences</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- <style>

    </style> -->
</head>
<body>
  <div class="container col-md-12">
  <header>
      <!-- <h1>Wengridient</h1> -->
      <div class="card-header bg-primary text-white">
          <h1>Residences</h1>
      </div>
  </header>
  <nav class=navbar-nav>
    <ul class="nav navbar-nav">
      <li><a href="#">About Us</a></li>
      <li><a href="addNewResidence.php">Add New Residence</a></li>
      <li><a href="ViewResidence.php">View Residence</a></li>
      <li><a href="ViewApplication-Officer.php">View Application</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?php echo $_SESSION['username']; ?>!<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Profil.php">Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
      </li>
    </ul>
      </nav>
  </nav>
</div>
    <div class="container col-md-10">
        <div class="card">

            <div class="card-body">
                <a href="addNewResidence.php" class="btn btn-primary">add new
                  residence</a>
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Address</th>
                        <th>Bedrooms</th>
                        <th>Kitchens</th>
                        <th>Bathrooms</th>
                        <th>monthlyRental</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        include "connectSQL.php";
                        $no = 1;
                        $tampil = mysqli_query($connectSQL, "SELECT * FROM
                          residence");
                        while($SQLdata=mysqli_fetch_array($tampil)){
                    ?>
                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $SQLdata['residenceAddress']; ?> </td>
                        <td> <?php echo $SQLdata['Size']; ?> </td>
                        <td> <?php echo $SQLdata['bedroomNum']; ?> </td>
                        <td> <?php echo $SQLdata['kitchenNum']; ?> </td>
                        <td> <?php echo $SQLdata['bathroomNum']; ?> </td>
                        <td>
                            <!--<a href="edit_customer.php?idcustomer=
                            " class="btn btn-sm btn-
                            warning">Edit</a>-->

                            <a href="delete.php?residenceID=<?php echo $SQLdata
                            ['residenceID']; ?>" class="btn btn-sm btn-danger
                            ">Delete</a>
                          <?php
                            // echo "are you sure to delete this residence? "
                          }
                          ?>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


</body>
</html>
