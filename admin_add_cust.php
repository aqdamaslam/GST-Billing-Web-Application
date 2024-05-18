<?php 
	require_once('db/admin_check.php');
	require_once('db/connection.php');
	require_once('db/rightclick.php');
$output = '';
if(isset($_POST["import"]))
{
 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $billpartyname = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $suppliername = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $billpartyaddress = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $billpartygstin = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $owner = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $ph_1 = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $ph_2 = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $ph_3 = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $firm_type = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $query = "INSERT INTO cust_reg(billpartyname, suppliername, billpartyaddress, billpartygstin, owner, ph_1, ph_2, ph_3, firm_type) VALUES ('".$billpartyname."', '".$suppliername."', '".$billpartyaddress."', '".$billpartygstin."', '".$owner."', '".$ph_1."', '".$ph_2."', '".$ph_3."', '".$firm_type."')";
    mysqli_query($connection, $query);
    $output .= '<td>'.$billpartyname.'</td>';
    $output .= '<td>'.$suppliername.'</td>';
    $output .= '<td>'.$billpartyaddress.'</td>';
    $output .= '<td>'.$billpartygstin.'</td>';
    $output .= '<td>'.$owner.'</td>';
    $output .= '<td>'.$ph_1.'</td>';
    $output .= '<td>'.$ph_2.'</td>';
    $output .= '<td>'.$ph_3.'</td>';
    $output .= '<td>'.$firm_type.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
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

  


  
  <!--- Copy And Check ------>

<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("billpartygstin");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("Copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}

</script>

<!--- Copy And Check ------>


  
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
	<!-- Add New Customer -->
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
  <form class="form-horizontal" role="form" name="myform" onsubmit="return validateform()" id="cust_reg" method="post" action="admin_cust_register_pre.php" target="blank">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name"><b>Party Name:</b></label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="billpartyname" pattern="[A-Za-z/-,]{1}[A-Za-z/-,\s]+" style="text-transform:uppercase" autocomplete="off" placeholder="Please Enter Party Name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><b>Supplier Name:</b></label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="suppliername" pattern="[A-Za-z/-,]{1}[A-Za-z/-,\s]+" style="text-transform:uppercase" autocomplete="off" placeholder="Please Enter Supplier Name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="add"><b>Address:</b></label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="billpartyaddress" pattern="[A-Za-z0-9/-,]{1}[A-Za-z0-9/-,\s]+" style="text-transform:uppercase" autocomplete="off" placeholder="Please Enter billpartyaddressess" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>GSTIN Number:</b></label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="billpartygstin" name="billpartygstin" pattern="\d{2}[A-Za-z]{5}\d{4}[A-Za-z]{1}\d[Zz]{1}[A-Za-z\d]{1}"  style="text-transform:uppercase" autocomplete="off" title="Enter Valid GSTIN Number" placeholder="Please Enter billpartygstin Number" required>
		<div><a href="https://services.gst.gov.in/services/searchtp" onclick="myFunction()" target="_blank">Copy And Verify</a></div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>Owner:</b></label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="owner" placeholder="Please Enter Owner">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>Phone Number 1:</b></label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="ph1" placeholder="Please Enter Phone Number 1">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>Phone Number 2:</b></label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="ph2" placeholder="Please Enter Phone Number 2">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>Phone Number 3:</b></label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="ph3" placeholder="Please Enter Phone Number 3">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><b>Firm Type:</b></label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="firm_type" placeholder="Please Enter Firm Type">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
</div>
</form>

<br />

   <h3 align="center">Edit Customer Data</h3><br />
  <div class="container box">
    <label class="control-label col-sm-2">Edit Customer Data</label>
	<a href="admin_cust_edit.php" class="btn btn-success" role="button" target="_blank">Edit Button</a>
  </div>

  <div class="container box">
   <h3 align="center">Import Excel to Database</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label class="control-label col-sm-2">Select Excel File</label>
	<div class="col-sm-4">
    <input type="file" class="form-control" name="excel" />
	</div>
	<div class="col-sm-4">
    <input type="submit" name="import" class="btn btn-info" value="Upload Bulk Data" />
	</div>
   </form>
   <br />
   <br />
   <?php
   echo $output;
   ?>
  </div>
</br>

<form action="admin_export_cust_data.php" method="post" >
  <div class="container box">
<div class="col-sm-6" style="background-color:white;">
			<div class="row">
    <label class="control-label col-sm-6">Import Customer Data</label>
					<div class="col-sm-6" style="background-color:white;">
					<div class="result"></div>
					</div>
			</div>
</div>
	
<div class="container"><center>
  <input type="submit" name="export" class="btn btn-success" value="Import" />
  </center>
</div>
</div>
</form>

</br>
</br>

<footer class="container-fluid text-center">
  <p>&copy Hira Coal Mines Pvt Ltd. | 2018-2020</p>
</footer>

</body>
</html>

