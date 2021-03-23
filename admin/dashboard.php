<?php include"../authentication/auth.php"; ?>
<?php include"authentication.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</head>
<body>

  <?php include 'header.php'; ?>
<div class="container"> 
<?php echo "Welcome To Admin Dashboard"; ?>

<h1>User Records</h1>

<table class="table table-striped table-hover ">
  <thead>
    <tr class="info">
      <th>Sr No.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Department</th>
      <th>Role</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $i = 1;

      $query= "select * from Users";
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
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['department']; ?></td>
      <td><?php echo $row['role']; ?></td>
      <td><a href="edituser.php?id=<?php echo $row['user_id']; ?>">Edit</a> 
        | <a href="deletuser.php?id=<?php echo $row['user_id']; ?>">Delete</a></td>
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