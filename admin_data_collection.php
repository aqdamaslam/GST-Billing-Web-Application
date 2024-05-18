<?php 
	require_once('db/admin_check.php');
	require_once('db/connection.php');
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

  
<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
		background: #E0FFFF;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #cc00cc;
        border-top: none;
        cursor: pointer;
		background: #E6E6FA;
    }
    .result p:hover{
        background: #00ffcc;
    }
	body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box1 */
    .search-box1{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box1 input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result1{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
		background: #E0FFFF;
    }
    .search-box1 input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result1 p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #cc00cc;
        border-top: none;
        cursor: pointer;
		background: #E6E6FA;
    }
    .result1 p:hover{
        background: #00ffcc;
    }
	body{
        font-family: Arail, sans-serif;
    }
</style>



<!-- Calender --->

<script type="text/javascript">
        $(function () {
            $('#firstdate').datepicker({
                dateFormat: "yy/dd/MM",
                changeMonth: true,
                changeYear: true
            });
        });
</script>

<!--// Calender --->



<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.col-sm-6 input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".col-sm-6").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
    $('.search-box1 input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result1");
        if(inputVal.length){
            $.get("backend-search.php", {term1: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result1 item
    $(document).on("click", ".result1 p", function(){
        $(this).parents(".search-box1").find('input[type="text"]').val($(this).text());
        $(this).parent(".result1").empty();
    });
});
</script>

<!---- Live Search ------->

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
      <a class="navbar-brand" href="admin_add_emp.php"><img src="img/logo.png" alt="Hira Coal Mines Pvt. Ltd."></a>
    </div>
	<div class="pull-center">
		<p style="color:white;">Welcome <i><?php echo $_SESSION['username']; ?></i></p>
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
    <li><a href="admin_add_cust.php">Add New Customer</a></li>
    <li><a href="admin_update_entry.php">Search/Edit/Reprint</a></li>
    <li class="active"><a href="admin_data_collection.php">Data Collection</a></li>
  </ul>
</div>
</br></br></br>

<h3 align="center">Customer Data</h3><br />


<form action="admin_export_cust_data.php" method="post" >
<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Customer Data</div>
					<div class="col-sm-6" style="background-color:white;">
					<div class="result"></div>
					</div>
			</div>
</div>
	
<div class="container"><center>
  <input type="submit" name="export" class="btn btn-success" value="Export" />
  </center>
</div>
</form>
</br>

<h3 align="center">Jharkhand Data</h3><br />


<form action="admin_jh_export_between_dates.php" method="post" >

<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Select First Date</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="firstdate" name="firstdate" autocomplete="off" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" placeholder="DD-MM-YYYY" >
					</div>
			</div>
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Select Second Date</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="seconddate" name="seconddate" autocomplete="off" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" placeholder="DD-MM-YYYY" >
					</div>
			</div>
			
</div>
	
<div class="container"><center>
  <input type="submit" name="export" class="btn btn-success" value="Export" />
  </center>
</div>
</form>
</br>


<form action="admin_jh_export_between_invoice.php" method="post" >

<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Select First Invoice</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="firstinvoice" name="firstinvoice" pattern="[0-9]+" placeholder="Enter Firt Date Of Invoice" >
					</div>
			</div>
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Select Second Invoice</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="secondinvoice" name="secondinvoice" pattern="[0-9]+" placeholder="Enter Second Date Of Invoice" >
					</div>
			</div>
			
</div>
	
<div class="container"><center>
  <input type="submit" name="export" class="btn btn-success" value="Export" />
  </center>
</div>
</form>
</br>


<form action="admin_jh_export_by_partyname.php" method="post" >
<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Data By Bill Party Name</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" autocomplete="off" id="search" name="search"  placeholder="Enter Bill Party Name">
					<div class="result"></div>
					</div>
			</div>
</div>
	
<div class="container"><center>
  <input type="submit" name="export" class="btn btn-success" value="Export" />
  </center>
</div>
</form>
</br>


<form action="admin_jh_export.php" method="post" >
<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Jharkhand Data</div>
					<div class="col-sm-6" style="background-color:white;">
					</div>
			</div>
</div>
	
<div class="container"><center>
  <input type="submit" name="export" class="btn btn-success" value="Export" />
  </center>
</div>
</form>
</br>

<h3 align="center">UP Data</h3><br />


<form action="admin_up_export_between_dates.php" method="post" >

<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Select First Date</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="firstdate" name="firstdate" autocomplete="off" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" placeholder="DD-MM-YYYY" >
					</div>
			</div>
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Select Second Date</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="seconddate" name="seconddate"  autocomplete="off" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" placeholder="DD-MM-YYYY" >
					</div>
			</div>
			
</div>
	
<div class="container"><center>
  <input type="submit" name="export" class="btn btn-success" value="Export" />
  </center>
</div>
</form>
</br>


<form action="admin_up_export_between_invoice.php" method="post" >

<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Select First Invoice</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="firstinvoice" name="firstinvoice" pattern="[0-9]+" placeholder="Enter Firt Date Of Invoice" >
					</div>
			</div>
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Select Second Invoice</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="secondinvoice" name="secondinvoice" pattern="[0-9]+" placeholder="Enter Second Date Of Invoice" >
					</div>
			</div>
			
</div>
	
<div class="container"><center>
  <input type="submit" name="export" class="btn btn-success" value="Export" />
  </center>
</div>
</form>
</br>


<form action="admin_up_export_by_partyname.php" method="post" >
<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Data By Bill Party Name</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" autocomplete="off" id="search" name="search"  placeholder="Enter Bill Party Name">
					<div class="result"></div>
					</div>
			</div>
</div>
	
<div class="container"><center>
  <input type="submit" name="export" class="btn btn-success" value="Export" />
  </center>
</div>
</form>
</br>



<form action="admin_up_export.php" method="post" >
<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">UP Data</div>
					<div class="col-sm-6" style="background-color:white;">
					<div class="result"></div>
					</div>
			</div>
</div>
	
<div class="container"><center>
  <input type="submit" name="export" class="btn btn-success" value="Export" />
  </center>
</div>
</form>


</br>
</br>
</br>



<footer class="container-fluid text-center">
  <p>&copy Hira Coal Mines Pvt Ltd. | 2018-2020</p>
</footer>

</body>
</html>