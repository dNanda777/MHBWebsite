<?php session_start();?>
<title>Housing Alocation
</title>
<?php include('HF/header.php');?>
<div class="container">
  <h2>Alocate Housing</h2>
  <form class="form-horizontal" method="POST" name = "countDurations"
  action="addDate.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="requested_date">
        Requested Date:</label> <div class="col-sm-10">
          <?php echo $fromDate = $_GET['requested_date'];?>
        </div></div>
        <!-- for Duration -->
        <div class="form-group">
          <label class="control-label col-sm-2" >
            Duration:</label>
          <div class="col-sm-10">
            <!-- input duration-->
            <input type="radio" id="duration" name="duration" value=12>
            <label for="duration">12 months</label><br>
            <input type="radio" id="duration" name="duration" value=18>
            <label for="duration">18 months</label><br>
          </div>
        </div>
        <!-- for continue submit alocation-->
          <div class="form-group" id="requestDate">
            <div class="col-sm-offset-2 col-sm-10">
              <button href="edit_property.php?house=<?php echo $row['nickname'];
              ?>" class="btn btn-sm btn-primary" name="submit" type="submit">
              SUBMIT</button></div></div></form></div>
      <?php include('connectSQL.php');
      if(isset($_POST['duration']) ){
        $duration = $_POST['duration'];
      }else{
         //if it's not, duration value is consist of error msg
         $duration = "duration not set in POST Method - ALOCATION";}
      ?>
</body>
</html>
