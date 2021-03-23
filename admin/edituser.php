
<?php include"../authentication/auth.php"; ?>
<?php include"authentication.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script >
    function formvalidation(){
      var name=$('#inputName').val();
       var email=$('#inputEmail').val();
        var password=$('#inputPassword').val();
         var passlength=$('#inputPassword').val().length;
      
      if(name=='')
      {
        alert("PLEASE ENTER YOUR NAME");
        return false
      }
     
      if(email=='')
      {
        alert("PLEASE ENTER YOUR EMAIL");
        return false
      }
       
    }
  </script>
</head>
<body>

  <?php include 'header.php'; ?>
<div class="container"> 

<!----------Register form start here-------->


<div class="col-lg-6 col-xs-push-3 well">
<form class="form-horizontal" method="POST" action="updateuser.php" onsubmit="return formvalidation();">
  <fieldset>
    <legend>Edit User Details</legend>
    <?php if(isset($_SESSION['success']))
     {
      echo $_SESSION['success'];
      unset($_SESSION['success']);
     }
    ?>
    <?php
     $user_id=$_GET['id'];
     $query= "select * from Users Where user_id='$user_id'";
     //$query="SELECT FROM * Users WHERE user_id ='$user_id'";
     $res= mysqli_query($conn,$query);
     $data= mysqli_fetch_array($res);
    ?>

    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name" 
        value="<?php echo $data['name'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email"
        value="<?php echo $data['email'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
        
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Department</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="depart" id="depart" value="Admin" <?php if($data['department']== 'Admin'){
              echo "checked";} ?> >
            Admin
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="depart" id="depart" value="Web Devlopment" <?php if($data['department']== 'Web Devlopment'){
              echo "checked";} ?> >
            Web Devlopment
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="depart" id="depart" value="SEO"  <?php if($data['department']== 'SEO'){
              echo "checked";} ?>  >
            SEO
          </label>
        </div>
      </div>
    </div>
     <div class="form-group">
      <label class="col-lg-2 control-label">Role</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="role" id="role" value="admin" <?php if($data['role']== 'admin'){
              echo "checked";} ?> >
            Admin
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="role" id="role" value="employee" <?php if($data['role']== 'employee'){
              echo "checked";} ?> >
             Employee
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <!-- <label for="select" class="col-lg-2 control-label">Selects</label> -->
      <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </fieldset>
</form>

<!----------Register form end here-------->

</div>
</div>

</body>
</html>