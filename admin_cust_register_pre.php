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
<div class="container">
  <h3></h3></br></br>
  <ul class="nav nav-tabs nav-justified">
    <li><a href="admin_add_emp.php">Add Employee ID</a></li>
    <li class="active"><a href="admin_add_cust.php">Add New Customer</a></li>
    <li><a href="admin_update_entry.php">Search/Edit/Reprint</a></li>
    <li><a href="admin_data_collection.php">Data Collection</a></li>
  </ul>
</div>

<div class="container">
  <h2>Customer Entry</h2>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name"><b>Party Name:</b></label>
	  <?php echo $date = $_POST['billpartyname']; ?>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><b>Supplier Name:</b></label>
	  <?php echo $date = $_POST['suppliername']; ?>
	  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="add"><b>Address:</b></label>
      <?php echo $date = $_POST['billpartyaddress']; ?>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>GST Number:</b></label>
      <?php echo $date = $_POST['billpartygstin']; ?>
    </div></br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>Owner:</b></label>
      <?php echo $date = $_POST['owner']; ?>
    </div></br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>Phone Number 1:</b></label>
      <?php echo $date = $_POST['ph1']; ?>
    </div></br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>Phone Number 2:</b></label>
      <?php echo $date = $_POST['ph2']; ?>
    </div></br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>Phone Number 3:</b></label>
      <?php echo $date = $_POST['ph3']; ?>
    </div></br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>Firm Type:</b></label>
      <?php echo $date = $_POST['firm_type']; ?>
    </div></br>
	
	
  <form class="form-horizontal" role="form" name="myform" onsubmit="return validateform()" id="cust_reg" method="post" action="admin_cust_register.php">
  
	
      <input type="hidden" name="billpartyname" value="<?php echo $_POST['billpartyname'] ?>">
      <input type="hidden" name="suppliername" value="<?php echo $_POST['suppliername'] ?>">
      <input type="hidden" name="billpartyaddress" value="<?php echo $_POST['billpartyaddress'] ?>">
      <input type="hidden" name="billpartygstin" value="<?php echo $_POST['billpartygstin'] ?>">
      <input type="hidden" name="owner" value="<?php echo $_POST['owner'] ?>">
      <input type="hidden" name="ph1" value="<?php echo $_POST['ph1'] ?>">
      <input type="hidden" name="ph2" value="<?php echo $_POST['ph2'] ?>">
      <input type="hidden" name="ph3" value="<?php echo $_POST['ph3'] ?>">
      <input type="hidden" name="firm_type" value="<?php echo $_POST['firm_type'] ?>">
	
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
</div>

</form>
	<!-- //Add New Customer-->




<footer class="container-fluid text-center">
  <p>&copy Hira Coal Mines Pvt Ltd. | 2018-2020</p>
</footer>

</body>
</html>

