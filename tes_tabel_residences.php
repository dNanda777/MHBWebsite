<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Residences</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Residences
            </div>
            <div class="card-body">
                <a href="addNewResidence.php" class="btn btn-primary">add new
                  residence</a>
                <table class="table table-bordered">
                    <tr>
                        <th>Residence ID</th>
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
                          residences");
                        while($SQLdata=mysqli_fetch_array($tampil))
                        {
                    ?>
                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $SQLdata['address']; ?> </td>
                        <td> <?php echo $SQLdata['size']; ?> </td>
                        <td> <?php echo $SQLdata['bedrooms']; ?> </td>
                        <td> <?php echo $SQLdata['kitchens']; ?> </td>
                        <td> <?php echo $SQLdata['bathrooms']; ?> </td>
                        <td>
                            <!--<a href="edit_customer.php?idcustomer=<?php
                            echo $data['idcustomer']; ?>" class="btn btn-sm btn-
                            warning">Edit</a>-->
                            <a href="delete.php?residenceID=<?php echo $SQLdata
                            ['residenceID']; ?>" class="btn btn-sm btn-danger
                            ">Delete</a>
                        </td>
                    </tr>

                        <?php } ?>

                </table>
            </div>
        </div>
    </div>


</body>
</html>
