
<?php include"../authentication/auth.php"; ?>
<?php include"authentication.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Task</title>
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

<form class="form-horizontal" method="POST" action="inserttask.php" onsubmit="return formvalidation();">
  <fieldset>
    <legend>Assign Task<a href="alltask.php" class="btn btn-primary" style="margin: 5px;">All Task</a></legend>
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
      <label for="inputName" class="col-lg-12 "><b>Message</b></label>
      <div class="col-lg-12">
        <textarea  class="form-control" rows="10" name="message"  placeholder="Message/Task" style="background-color: #d9d9d9; padding: 5px;"></textarea>
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