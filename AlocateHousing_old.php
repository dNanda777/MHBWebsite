<title>Housing Alocation</title>

<?php include('HF/header.php');
include('connectSQL.php');?>
  <div class="container">
    <h2>Alocate Housing</h2>
    <!-- for requested date data showing -->
      <form class="form-horizontal" method="POST" action="addDate.php" name = "countDurations">
        <div class="form-group">
          <!-- label for date request-->
          <label class="control-label col-sm-2" for="requested_date">
            Requested Date:</label>
          <div class="col-sm-10">
            <?php echo $_GET['requested_date']?>
          </div>
        </div>

        <!-- for Duration -->
        <div class="form-group">
          <label class="control-label col-sm-2" >
            Duration:</label>
          <div class="col-sm-10">
            <!-- input duration-->
            <select class="form-control" id="duration" name="duration">
            <option value=12> 12 months </option>
            <option value=18> 18 months </option>
          </select>
          <?php

          ?>
          </div>
        </div>
          <!-- for end Data instant showing -->
          <!-- change type input to field showing end Date -->
        <!-- <div class="form-group">
          <label class="control-label col-sm-2" for="endDate">
            end date of rental :</label>
          <div class="col-sm-10">

            <p id="endDate" placeholder> </p> -->

            <!-- <input type="number" class="form-control" id="duration"
            placeholder="(change to end Date later)"
            name="duration"> -->
          <!-- </div>
        </div> --><!-- for continue submit alocation-->
          <div class="form-group" id="requestDate">
            <div class="col-sm-offset-2 col-sm-10">
                <!-- <a href="addDate.php?duration=<?php
                // echo $duration; ?>&requested_date=<?php
                // echo $row['requested_date'];?>" -->
                  <a href="addDate.php?duration=<?php $duration = $_GET['duration']; ?>"
                  class="btn btn-sm btn-primary" name="submit" >SUBMIT</a>
            </div>
          </div>
        </form>
      </div>
      <?php
      include('connectSQL.php');
      $duration = '';
      if(isset($_POST['duration']) ){
        $duration = $_POST['duration'];
       }else{
          $duration = "duration not set in GET Method - ALOCATION";
       }

      $applicationID = $_GET['applicationID'];
      // $sql = "SELECT * FROM application WHERE application = $_GET['applicationID']";
      $result = mysqli_query($connectSQL, "SELECT * FROM application WHERE applicationID = '$applicationID'");
      // if(mysqli_num_row($result)>0){
      $row = mysqli_fetch_assoc($result);

      IF ($duration != null){
        echo $duration;
        echo $_GET['requested_date'];
      }
      ?>

      <pre>
      <?php
      print_r($_GET['duration']);
      print_r($_GET['requested_date']);
      ?>
      </pre>
</body>
</html>
