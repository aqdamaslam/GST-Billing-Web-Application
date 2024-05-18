<?php
	
	require_once('db/up_check.php');
	require_once('db/rightclick.php');

if (isset($_POST['search'])) {
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	
	
	
	
}


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


<meta charset="UTF-8">



<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

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
      <a class="navbar-brand" href="up_login.php"><img src="img/logo.png" alt="Hira Coal Mines Pvt. Ltd.">
        </a>
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

	<!-- Jharkhand Login -->
<div class="container">
  <h3></h3></br>
  <ul class="nav nav-tabs nav-justified">
    <li><a href="up_login.php">Billing Outside UP</a></li>
    <li><a href="up_within.php">Billing Within UP</a></li>
    <li class="active"><a href="up_old.php">Search/Edit/Reprint</a></li>
  </ul>
</div>
</br>

<form action="up_outside_searchbyinvoice.php" method="post" target="_blank">

<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">UP Outside Search By Bill Number</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="invoice" name="invoice" pattern="[0-9]+" placeholder="Enter Invoice Number">
					</div>
			</div>
</div>
	
<div class="container"><center>
  <button type="submit" class="btn btn-success" name="submit" id="submit">Search</button>
  </center>
</div>
</form>
</br>


<form action="up_within_searchbyinvoice.php" method="post" target="_blank">

<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">UP Within Search By Bill Number</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="invoice" name="invoice" pattern="[0-9]+" placeholder="Enter Invoice Number">
					</div>
			</div>
</div>
	
<div class="container"><center>
  <button type="submit" class="btn btn-success" name="submit" id="submit">Search</button>
  </center>
</div>
</form>
</br>


<form action="up_searchbybillpartyname.php" method="post" target="_blank">
<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">UP Search By Bill Party Name</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" autocomplete="off" id="search" name="search"  placeholder="Enter Bill Party Name">
					<div class="result"></div>
					</div>
			</div>
</div>
	
<div class="container"><center>
  <button type="submit" class="btn btn-success" name="submit" id="submit">Search</button>
  </center>
</div>
</form>
</br>

<form action="up_searchbydate.php" method="post" target="_blank">

<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Select First Date</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="firstdate" name="firstdate" autocomplete="off" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" placeholder="DD-MM-YYY" required>
					</div>
			</div>
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Select Second Date</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="seconddate" name="seconddate" autocomplete="off" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" placeholder="DD-MM-YYY" required>
					</div>
			</div>
			
</div>
	
<div class="container"><center>
  <button type="submit" class="btn btn-success" name="submit" id="submit">Search</button>
  </center>
</div>
</form>

</br>


<form action="up_emp_outside_edit.php" method="post" target="_blank">

<div class="col-sm-6" style="background-color:white;">
			<div class="row">
	<div class="pull-center">
		<input style="border: none; border-color: transparent; background-color:white; color:white;" id="username" name="username" value='<?php echo $_SESSION['username']; ?>' readonly>
	</div>
				<div class="col-sm-6" style="background-color:white;">Outside UP Edit</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="edit" name="edit" pattern="[0-9]+" placeholder="Enter Invoice Number">
					</div>
			</div>
</div>
	
<div class="container"><center>
  <button type="submit" class="btn btn-success" name="submit" id="submit">Search</button>
  </center>
</div>
</form>
</br>


<form action="up_emp_within_edit.php" method="post" target="_blank">

<div class="col-sm-6" style="background-color:white;">
			<div class="row">
	<div class="pull-center">
		<input style="border: none; border-color: transparent; background-color:white; color:white;" id="username" name="username" value='<?php echo $_SESSION['username']; ?>' readonly>
	</div>
				<div class="col-sm-6" style="background-color:white;">Within UP Edit</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="edit" name="edit" pattern="[0-9]+" placeholder="Enter Invoice Number">
					</div>
			</div>
</div>
	
<div class="container"><center>
  <button type="submit" class="btn btn-success" name="submit" id="submit">Search</button>
  </center>
</div>
</form>

</br>





<footer class="container-fluid text-center">
  <p>&copy Hira Coal Mines Pvt Ltd. | 2018-2020</p>
</footer>

</body>
</html>