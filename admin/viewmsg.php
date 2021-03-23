<?php include"../authentication/auth.php"; ?>
<?php include"authentication.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>View</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
<body>

  <?php include 'header.php'; ?>

<div class="container"> 
<h3>Message Details View</h3>
<?php 
$m_id=$_GET['id'];
 $query= "select * from task where `t_id`='". $m_id ."' ";
      $res=mysqli_query($conn,$query);
      $count=mysqli_num_rows($res);
      $row= mysqli_fetch_array($res);


?>
<div class="col-sm-12" style="background: #f9f9f9; padding: 15px;">
<?php echo $row['task'];?>
  
</div>
<div class="col-sm-12">
  <br>
  <?php 
  if(isset($_REQUEST['m_reply'])){
    $mid=$_POST['m_id'];
    $user_id=$_POST['user_id'];
    $reply=mysqli_real_escape_string($conn,$_POST['m_reply']);
    
    $query= "insert into `task_reply` (`reply`,`m_id`,`reply_by`) 
                              values ('$reply','$mid','$user_id')";
    $res= mysqli_query($conn,$query);
    
    if($res){
      echo "Reply inserted Successfully.";
    }else{
      echo "Reply Error , Please try again later..";
    }

   }
  ?>
  <form action="" method="post">
    <fieldset>
    <input type="hidden" name="m_id" value="<?php echo $m_id; ?>">
    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><h4>Write Your Reply:</h4></label>
      <div class="col-lg-10">
    
    <textarea name="m_reply" rows="5" style="width: 100%; background: #d9d9d9;padding: 5px;"></textarea>
    </div>
  </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
        <button type="submit" class="btn btn-primary">SUBMIT REPLY</button>
      </div>
    </div>
  </fieldset>
  </form>
</div>
  <div class="col-sm-10">
  <fieldset>
    <p>&nbsp;</p>
    <?php  $m_id=$_GET['id'];
       $query1= "Select * from `task_reply` join `Users` on `Users`.`user_id`=`task_reply`.`reply_by` where `m_id`='". $m_id ."'";
       $res1=mysqli_query($conn,$query1);
       $count1=mysqli_num_rows($res1);
       while($row1= mysqli_fetch_array($res1)){
        ?>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><h3>&nbsp;</h3></label>
      <div class="col-lg-10">
      
        
        <div class="col-sm-12" style="background: #f9f9f9; padding: 15px;">
        <?php echo $row1['name'].':- '.$row1['reply'];?>
         </div>
      
     </div>
  </fieldset>
</div>
<?php }
?>
</div>
</div>

</body>
</html>