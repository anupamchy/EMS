<?php include"../authentication/auth.php"; ?>
<?php include"authentication.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Leave</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
<body>

  <?php include 'header.php'; ?>

<div class="container"> 
<h3>Leave List <a href="appliedleave.php" class="btn btn-primary" style="margin: 5px;">All applied Leave</a>
</h3>
<table class="table table-striped table-hover">
  <thead>
    <tr class="info">
      <th>Employee Name</th>
      <th>Earning Leave</th>
      <th>Medical leave</th>
      <th>Casual leave</th>
      <th>Valid From</th>
      <th>Valid To</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $i = 1;
      $user_id=$_SESSION['user_id'];
      $query= "select * from `assign_leave` t1 join `Users` t2 on t1.assign_to=t2.user_id where t2.user_id=$user_id";
      $res=mysqli_query($conn,$query);
      $count=mysqli_num_rows($res);
      
      if($count>0)
      {

      while($row= mysqli_fetch_array($res))
      {

    ?>
    <tr class="success">
       <td><?php echo $row['name']; ?></td>
      <td class="eleave"><?php echo $row['e_leave']; ?></td>
      <td class="mleave"><?php echo $row['m_leave']; ?></td>
       <td class="cleave"><?php echo $row['c_leave']; ?></td>
        <td class="v_from"><?php echo $row['v_from']; ?></td>
         <td class="v_to"><?php echo $row['v_to']; ?></td>
    </tr>
   <?php $i++; }
 }else{
    echo "No Record Found";
   } ?>

  </tbody>
</table>
<div class="col-lg-6 col-xs-push-3 well">
<form class="form-horizontal" method="POST" action="applyleave.php">
  <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
  <fieldset>
    <legend>Apply Leave </legend>
    <p><?php if(isset($_SESSION['success'])){
      echo $_SESSION['success'];
      unset($_SESSION['success']);
    } ?></p>
        <!-----left box------>
        <!-----rightt box------>
    <div class="col-xs-12">
      
    <div class="form-group">
       <div class="form-group">
      <label for="inputName" class="col-lg-3"><b>Leave From</b></label>
      <div class="col-lg-9">
        <input type="date" name="l_from"  placeholder="dd/mm/yy" class="form-control"
        onblur="validatedate(this.value);">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col-lg-3"><b>Leave To</b></label>
      <div class="col-lg-9">
        <input type="date" name="l_to"  placeholder="dd/mm/yy" class="form-control"
        onblur="validatedate(this.value);">
      </div>
    </div>
      <label for="inputName" class="col-lg-3"><b>Earning Leave</b></label>
      <div class="col-lg-9">
        <input type="text" name="eleave"  placeholder="No. of Leave" class="form-control"
        onblur="checkeleavequan(this.value);">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col-lg-3"><b>Medical Leave</b></label>
      <div class="col-lg-9">
        <input type="text" name="mleave"  placeholder="No. of Leave" class="form-control"
        onblur="checkmleavequan(this.value);">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col-lg-3"><b>Casual Leave</b></label>
      <div class="col-lg-9">
        <input type="text" name="cleave"  placeholder="No. of Leave" class="form-control" 
        onblur="checkcleavequan(this.value);">
      </div>
    </div>
    
    </div>
      <div class="form-group">
      <div class="col-lg-12 ">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>


</div>
</div>
<script >
  function validatedate(str) {
    var vfrm= $('.v_from').text();
    var vto= $('.v_to').text();
    var lfrm=str;
       //alert(vfrm);
    var date1 = new Date(vfrm);
    var date2 = new Date(lfrm);
    var diffDays = parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10); 

    var date3 = new Date(lfrm);
    var date4 = new Date(vto);
    var diffDays2 = parseInt((date4 - date3) / (1000 * 60 * 60 * 24), 10); 
   
  if(diffDays>=0 && diffDays2>=0){


  }else{
    alert('Please Enter Valid Date');
    return false;
   
  }

  }
  function checkeleavequan(str){
    var vfrm= $('.eleave').text();
    var lqty=str;
    if(vfrm>= lqty){
      
    }else{
      alert('please Enter Valid Earning Leave Quantity.')
      return false;
      }
  }
  function checkmleavequan(str){
    var vfrm= $('.mleave').text();
    var lqty=str;
    if(vfrm>= lqty){
      return true;
          }else{
      alert('please Enter Valid Medical Leave Quantity.')
         return false;
          }
  }
  function checkcleavequan(str){
    var vfrm= $('.cleave').text();
    var lqty=str;
    if(vfrm>= lqty){
       return true;
    }else{
      alert('please Enter Valid Casual Leave Quantity.')
      return false;
      }
  }
</script>


</body>
</html>
