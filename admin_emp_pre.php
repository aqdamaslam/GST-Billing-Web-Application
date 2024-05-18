<?php

	require_once('db/admin_check.php');
	require_once('db/rightclick.php');
	
?>



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


<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<style>

.video-container {
position: relative;
padding-bottom: 56.25%;
padding-top: 30px;
height: 0;
overflow: hidden;
}
.video-container iframe,  
.video-container object,  
.video-container embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}

</style>



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

	<!-- Add New Customer -->
<div class="container">
  <h3>Admin Panel</h3>
  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a href="admin_add_emp.php">Add Employee ID</a></li>
    <li><a href="admin_add_cust.php">Add New Customer</a></li>
    <li><a href="admin_update_entry.php">Search/Edit/Reprint</a></li>
    <li><a href="admin_data_collection.php">Data Collection</a></li>
  </ul>
  <br>
</div>

<div class="container">
  <h2>UP Employee ID Entry</h2>
 
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">User Name:</label>
	  <?php echo $date = $_POST['username']; ?>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
	  <?php echo $date = $_POST['password']; ?>
    </div>
	
	
<form class="form-horizontal" role="form" name="myform" onsubmit="return validateform()" id="cust_reg" method="post" action="admin_emp_add.php">
      <input type="hidden" name="username" value="<?php echo $_POST['username'] ?>">
      <input type="hidden" name="password" value="<?php echo $_POST['password'] ?>">
	  	
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

