
<?php include"../authentication/auth.php"; ?>
<?php include"authentication.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Assign Employee Leave</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
</head>
<body>
  <?php include 'header.php'; ?>
<div class="container"> 
  <div class="col-lg-10 col-xs-push-1 well">
  <?php if(isset($_SESSION['success']))
     {
      echo $_SESSION['success'];
      unset($_SESSION['success']);
     }
    ?>

<form class="form-horizontal" method="POST" action="insertleave.php">
  <fieldset>
    <legend>Assign Leave<a href="allleave.php" class="btn btn-primary" style="margin: 5px;">All Leave</a>
      <a href="allappliedleave.php" class="btn btn-primary" style="margin: 5px;">All Applied Leave</a></legend>
        <!-----left box------>
    <div class="col-xs-3" style="background-color: #d9d9d9; padding: 15px;">
       <div class="form-group">
      <label class="col-lg-12 "><b>Employee List</b></label>
      <input type="hidden" name="assign_by" value="<?php echo $_SESSION['user_id']; ?>">
      <div class="col-lg-12">
       
      <?php
      $query= "select * from Users where `role`='employee' order by user_id DESC";
      $res=mysqli_query($conn,$query);
      $count=mysqli_num_rows($res);

      while($row= mysqli_fetch_array($res))
      {

    ?>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="emp[]" value="<?php echo $row['user_id']; ?>">
            <?php echo $row['name']; ?>
          </label>
        </div>

      <?php } ?>
                
      </div>
    </div>
    </div>
    <!-----rightt box------>
    <div class="col-xs-9">
      <div class="form-group">
      <label for="inputName" class="col-lg-3"><b>Valid From</b></label>
      <div class="col-lg-9">
        <input type="date" name="validfrm"  placeholder="dd/mm/yy" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col-lg-3"><b>Valid To</b></label>
      <div class="col-lg-9">
        <input type="date" name="validto"  placeholder="dd/mm/yy" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col-lg-3"><b>Earning Leave</b></label>
      <div class="col-lg-9">
        <input type="text" name="eleave"  placeholder="No. of Leave" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col-lg-3"><b>Medical Leave</b></label>
      <div class="col-lg-9">
        <input type="text" name="mleave"  placeholder="No. of Leave" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col-lg-3"><b>Casual Leave</b></label>
      <div class="col-lg-9">
        <input type="text" name="cleave"  placeholder="No. of Leave" class="form-control" >
      </div>
    </div>
    
    </div>
      <div class="form-group">
      <div class="col-lg-12 col-lg-offset-3">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

<!----------Register form end here-------->

</div>
</div>

</body>
</html>