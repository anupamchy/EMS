<?php include"../authentication/auth.php"; ?>
<?php include"authentication.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>All Applied Leave List</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </head>
<body>
 <?php include "header.php"; ?>
<?php 
  if(isset($_POST['aproved']))
  {
    $status= "Approved";
    $comment =$_POST['comment'];
    $id =$_POST['id'];

    $query ="UPDATE  `applyed_leave` set `status`='$status', `comment`='$comment' where `id`='$id'";
    $res= mysqli_query($conn,$query);
  
  if($res){
    $_SESSION['success']="Row Updated Successfully.";

  }else{
    echo "Data Not Updated , Please Try Again.";
  }
}

  if(isset($_POST['rejected']))
  {
    $status= "Rejected";
    $comment =$_POST['comment'];
    $id =$_POST['id']; 

    $query ="UPDATE  `applyed_leave` set `status`='$status', `comment`='$comment' where `id`='$id'";
    $res= mysqli_query($conn,$query);
  
  if($res){
    $_SESSION['success']="Row Updated Successfully.";

  }else{
    echo "Data Not Updated , Please Try Again.";
  }
}


 ?>
<div class="container"> 
  <!-- <div class="col-xs-10 col-xs-push-1 well"> -->
<h3>All Applied Leave List</h3>
<?php if(isset($_SESSION['success'])){
   echo $_SESSION['success'];
   unset($_SESSION['success']);
   }?>
<table class="table table-striped table-hover">
  <thead>
    <tr class="info">
      <th>Sr No.</th>
      <th>Employee Name</th>
      <th>Earning Leave</th>
      <th>Medical leave</th>
      <th>Casual leave</th>
      <th>Valid From</th>
      <th>Valid To</th>
      <th>Status</th>
      <th>Comment</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $i = 1;

      $query= "select * from `applyed_leave` t1 join `Users` t2 on t1.apply_by=t2.user_id";
      $res=mysqli_query($conn,$query);
      $count=mysqli_num_rows($res);
      
      if($count>0)
      {

      while($row= mysqli_fetch_array($res))
      {

    ?>
    <tr class="success">
      <td><?php echo $i; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['e_leave']; ?></td>
      <td><?php echo $row['m_leave']; ?></td>
      <td><?php echo $row['c_leave']; ?></td>
      <td><?php echo $row['l_form']; ?></td>
      <td><?php echo $row['l_to']; ?></td>
      <td style="color: red;"><?php echo $row['status'];?></td>
      <td><form method="post"action=""><textarea name="comment"></textarea>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
         <button type="submit" name="aproved" class="btn btn-success">Approved</button>
        <button type="submit" name="rejected" class="btn btn-success">Rejected</button>
        </form>
      </td>
    </tr>
    <?php $i++;}
  }
 else{
    echo "No Record Found";
   } ?>

  </tbody>
</table>

</div>

</body>
</html>