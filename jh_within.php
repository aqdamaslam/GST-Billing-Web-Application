<?php
	require_once('db/jh_check.php');
	require_once('db/db_connect.php');
	require_once('db/rightclick.php');

$sql="SELECT * FROM jh_bill ORDER BY id DESC LIMIT 1";
$records=mysql_query($sql);


$sql = "SELECT billpartyname FROM cust_reg ORDER BY billpartyname";
$result = mysql_query($sql);

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


<title>Hira Coal Mines Pvt Ltd</title>

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



<!-- Page Input Validation --->

<script type="text/javascript">
function validateform(){  
var dateofinvoice=document.myform.dateofinvoice.value;
var placeofsupply=document.myform.placeofsupply.value; 
var search=document.myform.search.value;
var quantity=document.myform.quantity.value;
var modeoftransport=document.myform.modeoftransport.value;
var search1=document.myform.search1.value;
var rate=document.myform.rate.value;
var amount=document.myform.amount.value;
var cgst=document.myform.cgst.value;
var sgst=document.myform.sgst.value;
var cess=document.myform.cess.value;
var totalamount=document.myform.totalamount.value;
var tcs=document.myform.tcs.value;
var grandtotal=document.myform.grandtotal.value;

if(dateofinvoice == null || dateofinvoice == ""){  
  alert("Enter Date Of Invoice");  
  return false;  
  }
else if(placeofsupply == "-1" || placeofsupply == ""){  
  alert("Enter Place Of Supply");  
  return false;  
  }
else if(search == null || search == ""){  
  alert("Enter Bill Party Name");  
  return false;  
  }
else if(quantity == null || quantity == ""){  
  alert("Enter Quantity");  
  return false;  
  }
else if(modeoftransport == null || modeoftransport == ""){  
  alert("Enter Mode Of Transport");  
  return false;  
  }
else if(search1 == null || search1 == ""){  
  alert("Enter Ship Party Name");  
  return false;  
  }
else if(rate == null || rate == ""){  
  alert("Enter Rate");  
  return false;  
  }
else if(amount == null || amount == "" || amount == "NaN"){  
  alert("Check Amount");  
  return false;  
  }
else if(cgst == null || cgst == "" || cgst == "NaN"){  
  alert("Check CGST");  
  return false;  
  }
else if(sgst == null || sgst == "" || sgst == "NaN"){  
  alert("Check SGST");  
  return false;  
  }
else if(cess == null || cess == "" || cess == "NaN"){  
  alert("Check CESS");  
  return false;  
  }
else if(totalamount == null || totalamount == "" || totalamount == "NaN"){  
  alert("Check Total Amount");  
  return false;  
  }
else if(tcs == null || tcs == "" || tcs == "NaN"){  
  alert("Check TCS");  
  return false;  
  }
else if(grandtotal == null || grandtotal == "" || grandtotal == "NaN"){  
  alert("Check Grand Total");  
  return false;  
  }
}
</script>

<!-- // Page Input Validation --->

<!-- Current Date --->

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() {
	   			$( "#dateofinvoice" ).datepicker({
	   				minDate: 0
	   			});
	  		});
	  	</script>

<!-- // Current Date --->


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
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
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
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


<!-- Calculation --->

<script>


$(document).ready(function() {
// Addition of Quantiy and Rate
	$('#quantity').keyup,$('#rate').keyup(function(fv){
	var add11 = $('#quantity').val();
	var add22 = $('#rate').val();
	var add33 = parseFloat(add11) * parseFloat(add22);
	var divobj = document.getElementById('amount');
	divobj.value = add33.toFixed(2);
	});
// CGST Calculation(2.5%)
	$('#amount').keyup(function(fv1){
	var total = $('#amount').val() * 0.025;
	var divobj = document.getElementById('cgst');
	divobj.value = total.toFixed(2);
	});
// SGST Calculation(2.5%)
	$('#amount').keyup(function(fv2){
	var total_1 = $('#amount').val() * 0.025;
	var divobj = document.getElementById('sgst');
	divobj.value = total_1.toFixed(2);
	});
// CESS Calculation 400/M.T
	$('#quantity').keyup(function(fv3){
	var total = $('#quantity').val() * 400;
	var divobj = document.getElementById('cess');
	divobj.value = total.toFixed(2);
	});
// Total Amount After Tax Calculation
	$('#amount').keyup,$('#cgst').keyup,$('#sgst').keyup(function(fv4){
	var add111 = $('#amount').val();
	var add222 = $('#cgst').val();
	var add333 = $('#sgst').val();
	var add444 = parseFloat(add111) + parseFloat(add222) + parseFloat(add222);
	var divobj = document.getElementById('amountaftertax');
	divobj.value = add444.toFixed(2);
	});
// Total Amount Calculation
	$('#amountaftertax').keyup,$('#cess').keyup(function(fv5){
	var add1 = $('#amountaftertax').val();
	var add2 = $('#cess').val();
	var add3 = parseFloat(add1) + parseFloat(add2);
	var divobj = document.getElementById('totalamount');
	divobj.value = add3.toFixed(2);
	});
// Grand Total Calculation
	$('#totalamount').keyup,$('#tcs').keyup(function(fv5){
	var add_1 = $('#totalamount').val();
	var add_2 = $('#tcs').val();
	var add_3 = parseFloat(add_1) + parseFloat(add_2);
	var divobj = document.getElementById('grandtotal');
	divobj.value = add_3.toFixed(2);
	});
});
</script>

<!-- // Calculation --->


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
      <a class="navbar-brand" href="jh_login.php"><img src="img/logo.png" alt="Hira Coal Mines Pvt. Ltd.">
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

<div class="container">
  <h3></h3></br>
  <ul class="nav nav-tabs nav-justified">
    <li><a href="jh_login.php">Billing Outside Jharkhand</a></li>
    <li class="active"><a href="jh_within.php">Billing Within Jharkhand</a></li>
    <li><a href="jh_old.php">Search/Edit/Reprint</a></li>
  </ul>
</div></br></br></br>
    
	
 <form class="form-horizontal" role="form" name="myform" onsubmit="return validateform()" method="post" action="jh_within_search.php" target="_blank">
 
 <input style="border: none; border-color: transparent; background-color:white; color:white;" id="username" name="username" value='<?php echo $_SESSION['username']; ?>' readonly>

	<div class="col-sm-25" style="background-color:white;"><font size="10"><center><b>M/s HIRA COAL MINES PVT LTD</font></b></center></div>
	  
	<div class="col-sm-25" style="background-color:white;"><center><font size="5">Plot No. 173 Gupta Market. Thana Chowk,</font></center></div>
	  
	<div class="col-sm-25" style="background-color:white;"><center><font size="5">Ramgarh, Jharkhand</center></font></div></br></br></br>


<div class="container-fluid">  
<div class="row">
		<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">INVOICE NUMBER</div>
				<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="invoice" name="invoice" value="<?php while($jh_bill=mysql_fetch_assoc($records)){ echo $jh_bill['id']; } ?>" placeholder="Invoice Number" readonly>
					</div>
			</div>
		</div>
	
  
	<div class="row">
		<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Date OF Invoice & Supply</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="dateofinvoice" name="dateofinvoice" value="<?php print(date("d-m-Y")); ?>" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" placeholder="Date Of INVOICE" >
					</div>		
			</div>
		</div>
	</div>
		<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">PLACE OF SUPPLY</div>
				<div class="search-box" style="background-color:white;">
						<select class="form-control" id="placeofsupply" name="placeofsupply">
							<option value="">--Select State--</option>
							<option value="Andra Pradesh">Andra Pradesh</option>
							<option value="Arunachal Pradesh">Arunachal Pradesh</option>
							<option value="Assam">Assam</option>
							<option value="Bihar">Bihar</option>
							<option value="Chhattisgarh">Chhattisgarh</option>
							<option value="Goa">Goa</option>
							<option value="Gujarat">Gujarat</option>
							<option value="Haryana">Haryana</option>
							<option value="Himachal Pradesh">Himachal Pradesh</option>
							<option value="Jammu & Kashmir">Jammu & Kashmir</option>
							<option value="Jharkhand">Jharkhand</option>
							<option value="Karnataka">Karnataka</option>
							<option value="Kerala">Kerala</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Manipur">Manipur</option>
							<option value="Meghalaya">Meghalaya</option>
							<option value="Mizoram">Mizoram</option>
							<option value="Nagaland">Nagaland</option>
							<option value="Odisha">Odisha</option>
							<option value="Punjab">Punjab</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Sikkim">Sikkim</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<option value="Telangana">Telangana</option>
							<option value="Tripura">Tripura</option>
							<option value="Uttarakhand">Uttarakhand</option>
							<option value="Uttar Pradesh">Uttar Pradesh</option>
							<option value="West Bengal">West Bengal</option>
						</select>
					</div>
			</div>
		</div>
</div>
</div>
</br>
<div class="container-fluid"> 
	<div class="row">
		<div class="col-sm-6" style="background-color:white;"><center><b>Bill TO PARTY</b></center></br>
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Bill Party Name</div>	
				<div class="search-box" >
					<input type="text" class="form-control" autocomplete="off" id="search" name="search" placeholder="Bill Party Name">
					<div class="result"></div>
				</div>
				<div class="col-sm-6" style="background-color:white;">Bill Party Address</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="billpartyaddress" name="billpartyaddress" placeholder="Address" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">GSTIN Number</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="billpartygstin" name="billpartygstin" placeholder="GSTIN No."  readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Description Of Goods</div>
					<div class="search-box" style="background-color:white;">
						<select class="form-control" id="coal" name="coal">
							<option value="Coal">Coal</option>
							<option value="Steam Coal">Steam Coal</option>
							<option value="ROM">ROM Coal</option>
							<option value="Slack Coal">Slack Coal</option>
							<option value="Slurry Coal">Slurry Coal</option>
						</select>
					</div>
				<div class="col-sm-6" style="background-color:white;">HSN CODE</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="hsn" name="hsn" placeholder="2701" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Quantity(In M.T)</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="quantity" name="quantity" pattern="[0-9]+" placeholder="Quantity(In M.T)">
					</div>
				<div class="col-sm-6" style="background-color:white;">MODE OF TRANSPORT</div>
					<div class="search-box" style="background-color:white;">
						<select class="form-control" id="modeoftransport1" name="modeoftransport1">
							<option value="By Road">By Road</option>
							<option value="By Rail">By Rail</option>
						</select>
					</div>
				<div class="col-sm-6" style="background-color:white;">TRUCK OR RR NUMBER</div>
					<div class="search-box1" style="background-color:white;">
						<input type="text" class="form-control" id="modeoftransport" name="modeoftransport" placeholder="Truck Or RR Number">
					</div>
			</div>
		</div>
	
  
	<div class="row">
		<div class="col-sm-6" style="background-color:white;"><center><b>SHIP TO PARTY</b></center></br>
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Ship Party Name</div>	
				<div class="search-box1" >
					<input type="text" class="form-control" autocomplete="off" id="search1" name="search1" placeholder="Ship Party Name">
					<div class="result1"></div>
				</div>
				<div class="col-sm-6" style="background-color:white;">Party GSTIN Number :</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="shippartygstin" name="shippartygstin" placeholder="GSTIN No." readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Rate : (Rs/M.T)</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="rate" name="rate" placeholder="Rate : (Rs/M.T)">
					</div>
				<div class="col-sm-6" style="background-color:white;">Amount : (Rs)</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="amount" name="amount" placeholder="Amount : (Rs)" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">IGST : (2.5%) (Rs)</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="cgst" name="cgst" placeholder="IGST : (5%)" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">CGST : (2.5%) (Rs)</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="sgst" name="sgst" placeholder="IGST : (5%)" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Amount After Tax)</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="amountaftertax" name="amountaftertax" placeholder="Amount After Tax" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">CESS 400/M.T (Rs)</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="cess" name="cess" placeholder="CESS 400/M.T" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Total Amount (Rs)</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="totalamount" name="totalamount" placeholder="Total Amount" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">TCS 1% (Rs)</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="tcs" name="tcs" placeholder="Total Amount">
					</div>
				<div class="col-sm-6" style="background-color:white;">Grand Total (Rs)</div>
					<div class="search-box" style="background-color:white;">
						<input type="text" class="form-control" id="grandtotal" name="grandtotal" placeholder="Grand Total" readonly>
					</div>			
			</div>
		</div>
	</div>
	</div>
</div>
</br>


<div class="container-fluid">  
	<div class="row">
		<div class="col-sm-25" style="background-color:white;"><b>TERMS AND CONDITION</b></div>
		<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-12" style="background-color:white;">1. E & OE</div>
			</div>
			<div class="row">
				<div class="col-sm-12" style="background-color:white;">2. Goods Once Sold will not be taken back.</div>
			</div>
			<div class="row">
				<div class="col-sm-12" style="background-color:white;">3. Interest rate of 18% p.a will be charge on late payment of more than 7 days</div>
			</div>
			<div class="row">
				<div class="col-sm-12" style="background-color:white;">4. Subject to Allahabad Jurisdiction.</div>
			</div>
		</div>
		<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-12" style="background-color:white;"><b><center>For M/s Hira Coal Mines Pvt. Ltd.</b></center></center-right</div>
			</div>
			</br>
			</br>
			</br>
			<div class="row">
				<div class="col-sm-12" style="background-color:white;"><center><b>Authorized Signature</b></center></div>
			</div>
		</div>
	</div>
</div>
</br>

<div class="container"><center>
  <button type="submit" class="btn btn-success" name="submit" id="submit">Next</button>
  </center>
</div>
</form>
</br>

<footer class="container-fluid text-center">
  <p>&copy Hira Coal Mines Pvt Ltd. | 2018-2020</p>
</footer>

</body>
</html>
