<?php
ob_start();
	require_once('db/rightclick.php');

session_start();
if($_SESSION){
	if($_SESSION['admin'])
	{
		header("Location: admin_add_emp.php");
	}
	if($_SESSION['up'])
	{
		header("Location: up_login.php");
	}
	if($_SESSION['jh'])
	{
		header("Location: jh_login.php");
	}
}



include('login.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hira Coal Mines Pvt Ltd.</title>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" href="img/favicon.png">
	
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

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
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Hira Coal Mines Pvt. Ltd.">
        </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</nav>
<div class="container">
  <h2>Login</h2>

       <div class="form-bottom">
		  <form role="form" action="" method="post" class="login-form">
		   	<div class="form-group">
		   		<label class="sr-only" for="form-username">Username</label>
	        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
	        </div>
	            <div class="form-group">
					<label class="sr-only" for="form-password">Password</label>
			        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			     </div>
			      <button type="submit" name="submit" class="btn">Login</button>
					<?php echo $error; ?>
		 </form>
 </div>
</div>

</body>
</html>