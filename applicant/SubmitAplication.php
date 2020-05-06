<title>Submit Application</title>

<?php include('../HF/headerMHB.php');?>

  <div class="container">
    <h2>Submit Application</h2>
      <form class="form-horizontal" action="ViewApplication.php">
        <div class="form-group">

          <!-- label for date request-->
          <label class="control-label col-sm-2" for="requested_date">Requested Date:</label>
          <div class="col-sm-10">

            <!-- input date request-->
            <input type="date" class="form-control" id="requested_date"
            placeholder="Requested Date" name="requested_date">

          </div>

        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <?php

              $residenceID = mysqli_query($connectSQL, "SELECT residenceID
              FROM residence WHERE residenceID = $_GET['residenceID']"

              $requested_date = $_POST['requested_date']
            ?>
            <!-- button action specification-->
            <button
            href="ViewApplication.php?residenceID=<?php echo $residenceID;
            ?>&requested_date=<?php echo $requested_date ?>"
            type="submit" class="btn btn-primary">

            SUBMIT
          </button>

          </div>
        </div>
      </form>
  </div>

</body>
</html>

<?php

        include "../connectSQL.php";
        if(isset($_POST['submit']))
        {
            $requested_date = $_POST['requested_date'];
            mysqli_query($connectSQL, "INSERT INTO application
              VALUES('$requested_date')") or die(mysqli_error($connectSQL));
            echo "<div align='center'><h5> Loading.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=
            http://localhost/mhb/applicant/ViewApplication.php'>";
        }
?>
