<?php include"../authentication/auth.php"; ?>
<?php include"authentication.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title> Applied Leave</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
<body>

  <?php include 'header.php'; ?>

<div class="container"> 
<h3 style="color: #ac5353;">All Applied Status</h3>
<table class="table table-striped table-hover">
  <thead>
    <tr class="info">
      <th>Sr. No.</th>
      <th>Earning Leave</th>
      <th>Medical leave</th>
      <th>Casual leave</th>
      <th>Leave From</th>
      <th>Leave To</th>
      <th>Status</th>
      <th>comment</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $i = 1;
      $user_id=$_SESSION['user_id'];
      $query= "select * from `applyed_leave` where `apply_by`=$user_id";
      $res=mysqli_query($conn,$query);
      $count=mysqli_num_rows($res);
      
      if($count>0)
      {

      while($row= mysqli_fetch_array($res))
      {

    ?>
    <tr class="success">
       <td><?php echo $i; ?></td>
      <td class="mleave"><?php echo $row['m_leave']; ?></td>
      <td class="mleave"><?php echo $row['m_leave']; ?></td>
      <td class="cleave"><?php echo $row['c_leave']; ?></td>
      <td><?php echo $row['l_form']; ?></td>
      <td class="eleave"><?php echo $row['l_to']; ?></td>
      <td class="v_from" style="color: red;"><?php echo $row['status']; ?></td>
      <td class="" style="color:  #0040ff;"><?php echo $row['comment']; ?></td>
      
    </tr>
   <?php $i++; }
 }else{
    echo "No Record Found";
   } ?>

  </tbody>
</table>
</div>

</body>
</html>
