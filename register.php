<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
       if(password=='')
      {
        alert("PLEASE ENTER YOUR PASSWORD");
        return false
      }
      if(passlength<5)
      {
        alert("PLEASE ENTER YOUR PASSWORD MINIMUM 5 DIGIT");
        return false
      }
    }
  </script>
</head>
<body>

  <header>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">EMS</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
       
        <li><a href="register.php">Register Form</a></li>
       
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

  </header>

<div class="container"> 

<!----------Register form start here-------->


<div class="col-lg-6 col-xs-push-3 well">
<form class="form-horizontal" method="POST" action="userinsert.php" onsubmit="return formvalidation();">
  <fieldset>
    <legend>Register</legend>
    <?php if(isset($_SESSION['success']))
     {
      echo $_SESSION['success'];
      unset($_SESSION['success']);
     }
    ?>
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
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
            <input type="radio" name="depart" id="depart" value="Web Devlopment" checked="">
            Web Devlopment
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="depart" id="depart" value="SEO">
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
            <input type="radio" name="role" id="role" value="admin" checked>
            Admin
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="role" id="role" value="employee">
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