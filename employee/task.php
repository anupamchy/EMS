<?php include"../authentication/auth.php"; ?>
<?php include"authentication.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Task</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
<body>

  <?php include 'header.php'; ?>

<div class="container"> 
<h3>All Task List</h3>
<table class="table table-striped table-hover">
  <thead>
    <tr class="info">
      <th>Sr No.</th>
      <th>Task</th>
      <th>Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $i = 1;

      $query= "select * from task where `user_id`='".$_SESSION['user_id']."'";
      $res=mysqli_query($conn,$query);
      $count=mysqli_num_rows($res);
      
      if($count>0)
      {

      while($row= mysqli_fetch_array($res))
      {

    ?>
    <tr class="success">
      <td><?php echo $i; ?></td>
      <td><a href="viewmsg.php?id=<?php echo $row['t_id']; ?>"><?php echo substr($row['task'],0,100); ?></a></td>
      <td><?php echo $row['date_time']; ?></td>
      <td><a href="viewmsg.php?id=<?php echo $row['t_id']; ?>">View</a> 
      </td>
    </tr>
   <?php $i++; }}else{
    echo "No Record Found";
   } ?>

  </tbody>
</table>

</div>
</div>

</body>
</html>
