<?php 

	require_once('db/admin_check.php');
	require_once('db/rightclick.php');
	
?>

<!------- Admin Authentication --------->


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hira Coal Mines Pvt Ltd.</title>
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" href="img/favicon.png">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>


<script type="text/javascript">
function validateform(){  
var username=document.myform.username.value;  
var password=document.myform.password.value;  
var password_two=document.myform.password_two.value;
  
if (username==null || username==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<1){  
  alert("Password must be at least 1 characters long.");  
  return false;  
  }
else if(password != password_two){  
  alert("Password must be Same.");  
  return false;  
  }
}
</script>


  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="admin_add_emp.php"><img src="img/logo.png" alt="Hira Coal Mines Pvt. Ltd.">
        </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h3></h3></br></br>
  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a href="admin_add_emp.php">Add Employee ID</a></li>
    <li><a href="admin_add_cust.php">Add New Customer</a></li>
    <li><a href="admin_update_entry.php">Update</a></li>
    <li><a href="admin_data_collection.php">Data Collection</a></li>
  </ul>
</div>

<div class="container">
  <h2>UP Employee ID Entry</h2>
  <form class="form-horizontal" role="form" name="myform" onsubmit="return validateform()" id="loginsystem" method="post" action="admin_up_emp_pre.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">User Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="username" id="username" placeholder="Please Enter User Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-4">
        <input class="form-control" id="password" name="password" type="password" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-4">
        <input class="form-control" id="password_two" name="password_two" type="password" placeholder="Verify Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
      </div>
    </div>
</form>
</div>
	<!-- //Add New Customer-->


<footer class="container-fluid text-center">
  <p>&copy Hira Coal Mines Pvt Ltd. | 2018-2020</p>
</footer>

</body>
</html>

