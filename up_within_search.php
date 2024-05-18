<?php  
	require_once('db/up_check.php');
	require_once('db/db_connect.php');
	require_once('db/rightclick.php');
	
	
$search = mysql_real_escape_string($_REQUEST['search']);

$sql= "SELECT * FROM cust_reg WHERE billpartyname LIKE '%".$search."%' LIMIT 1";
$records=mysql_query($sql);

$search1 = mysql_real_escape_string($_REQUEST['search1']);

$sql1= "SELECT * FROM cust_reg WHERE billpartyname LIKE '%".$search1."%' LIMIT 1";
$records1=mysql_query($sql1);



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

	</head>




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
});
</script>




<!-- Page Input Validation --->

<script type="text/javascript">
function validateform(){  
var placeofsupply=document.myform.placeofsupply.value; 
var billpartyname=document.myform.billpartyname.value;
var billpartyaddress=document.myform.billpartyaddress.value;
var billpartygstin=document.myform.billpartygstin.value;
var quantity=document.myform.quantity.value;
var modeoftransport1=document.myform.modeoftransport1.value;
var modeoftransport=document.myform.modeoftransport.value;
var shippartyname=document.myform.shippartyname.value;
var shippartyaddress=document.myform.shippartyaddress.value;
var shippartygstin=document.myform.shippartygstin.value;
var rate=document.myform.rate.value;
var amount=document.myform.amount.value;
var cgst=document.myform.cgst.value;
var sgst=document.myform.sgst.value;
var cess=document.myform.cess.value;
var totalamount=document.myform.totalamount.value;
var tcs=document.myform.tcs.value;
var othercharges=document.myform.othercharges.value;
var grandtotal=document.myform.grandtotal.value;
  
if(placeofsupply == null || placeofsupply == ""){  
  alert("Enter Place Of Supply");  
  return false;  
  }
else if(billpartyname == null || billpartyname == ""){  
  alert("Enter Party Bill Party Name");  
  return false;  
  }
else if(billpartyaddress == null || billpartyaddress == ""){  
  alert("Enter Bill Party Address");  
  return false;  
  }
else if(billpartygstin == null || billpartygstin == "" || billpartygstin.length!=15){  
  alert("Enter Valid Bill Party GSTIN Number");  
  return false;  
  }
else if(quantity == null || quantity == ""){  
  alert("Enter Quantity");  
  return false;  
  }
else if(modeoftransport1 == "-1"){  
  alert("Select Mode Of Transport");  
  return false;  
  }
else if(modeoftransport == null || modeoftransport == "" || modeoftransport == "NaN"){  
  alert("Enter Truck Or RR Number");  
  return false;  
  }
else if(shippartyname == null || shippartyname == ""){  
  alert("Enter Ship Party Name");  
  return false;  
  }
else if(shippartyaddress == null || shippartyaddress == ""){  
  alert("Enter Ship Party Address");  
  return false;  
  }
else if(shippartygstin == null || shippartygstin == "" || shippartygstin.length!=15){  
  alert("Enater Valid Ship Party GSTIN Number");  
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
else if(othercharges == null || othercharges == "" || othercharges == "NaN"){  
  alert("Check Other Charges");  
  return false;  
  }
else if(grandtotal == null || grandtotal == "" || grandtotal == "NaN"){  
  alert("Check Grand Total");  
  return false;  
  }
}
</script>

<!-- // Page Input Validation --->


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


function myFunction1() {
  /* Get the text field */
  var copyText = document.getElementById("shippartygstin");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("Copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}

</script>

<!--- Copy And Check ------>

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

<div class="container">
  <h3></h3></br>
  <ul class="nav nav-tabs nav-justified">
    <li><a href="up_login.php">Billing Outside UP</a></li>
    <li class="active"><a href="up_within.php">Billing Within UP</a></li>
    <li><a href="up_old.php">Search/Edit/Reprint</a></li>
  </ul>
</div>
    </br></br></br>
	
 
 	
 <form class="form-horizontal" role="form" name="myform" onsubmit="return validateform()" id="cust_reg" method="post" action="up_within_pre.php">
 
<body>

	<div class="pull-center">
		<p style="color:white;">Welcome</p><input style="border: none; border-color: transparent;" id="username" name="username" value='<?php echo $_SESSION['username']; ?>' readonly>
	</div>

	<div class="col-sm-25" style="background-color:white;"><font size="10"><center><b>M/s HIRA COAL MINES PVT LTD</font></b></center></div>
	  
	<div class="col-sm-25" style="background-color:white;"><center><b><font size="5">C-C 6 G.T.B NAGAR KARELI,</font></b></center></div>
	  
	<div class="col-sm-25" style="background-color:white;"><center><b><font size="5">ALLAHABAD, U.P.</center></font></b></div>
</br>

<div class="container-fluid">  
<div class="row">
		<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">INVOICE NUMBER</div>
				<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="invoice" name="invoice" value="<?php echo $_POST['invoice']; ?>" placeholder="Invoice Number" readonly>
					</div>
			</div>
		</div>
	
  
	<div class="row">
		<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Date OF INVOICE & Supply</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="dateofinvoice" name="dateofinvoice" value="<?php echo $_POST['dateofinvoice']; ?>" placeholder="Date Of INVOICE" required>
					</div>		
			</div>
		</div>
	</div>
		<div class="col-sm-6" style="background-color:white;">
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">PLACE OF SUPPLY</div>
				<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="placeofsupply" name="placeofsupply" value="<?php echo $_POST['placeofsupply']; ?>" placeholder="Place Of Supply" readonly>
					</div>
			</div>
		</div>
</div>
</div>
</br>
<div class="container-fluid"> 
	<div class="row">
		<div class="col-sm-6" style="background-color:white;"><center><b>Bill TO PARTY</b></center>
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Bill Party Name</div>
					<div class="col-sm-6" style="background-color:white;">
						<input class="form-control" id="billpartyname" name="billpartyname" value = "<?php while($row=mysql_fetch_array($records)){ ?><?php echo $row['billpartyname'];?>" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Bill Party Address</div>
					<div class="col-sm-6" style="background-color:white;">
						<input class="form-control" id="billpartyaddress" name="billpartyaddress" value="<?php echo $row["billpartyaddress"]; ?>" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">GSTIN Number</div>
					<div class="col-sm-6" style="background-color:white;">
						<input class="form-control" id="billpartygstin" name="billpartygstin" value="<?php echo $row["billpartygstin"]; ?>"  readonly> <?php } ?>
						<div><a href="https://services.gst.gov.in/services/searchtp" onclick="myFunction()" target="_blank">Copy And Verify</a></div>
					</div>
				<div class="col-sm-6" style="background-color:white;">Description Of Goods</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="coal" name="coal" value="<?php echo $_POST['coal']; ?>" placeholder="Description Of Goods" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">HSN CODE</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="hsn" name="hsn" placeholder="2701" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Quantity(In M.T)</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo $_POST['quantity']; ?>" placeholder="Quantity(In M.T)" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">MODE OF TRANSPORT</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="modeoftransport1" name="modeoftransport1" value="<?php echo $_POST['modeoftransport1']; ?>" placeholder="Mode Of Transport" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">TRUCK OR RR NUMBER</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="modeoftransport" name="modeoftransport" value="<?php echo $_POST['modeoftransport']; ?>" placeholder="Truck Or RR Number" readonly>
					</div>
			</div>
		</div>
	
  
	<div class="row">
		<div class="col-sm-6" style="background-color:white;"><center><b>SHIP TO PARTY</b></center>
			<div class="row">
				<div class="col-sm-6" style="background-color:white;">Ship Party Name :</div>
					<div class="col-sm-4" style="background-color:white;">
						<input type="text" class="form-control" id="shippartyname" name="shippartyname" value = "<?php while($row=mysql_fetch_array($records1)){ ?><?php echo $row['billpartyname'];?>" readonly>
						<div class="result"></div>
					</div>
				<div class="col-sm-6" style="background-color:white;">Ship Party Address :</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="shippartyaddress" name="shippartyaddress"  value="<?php echo $row["billpartyaddress"]; ?>" placeholder="Party Address" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Party GSTIN Number :</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="shippartygstin" name="shippartygstin" placeholder="GSTIN No." value="<?php echo $row["billpartygstin"]; ?>"  pattern="[A-Z0-9]+" title="Enter Valid GSTIN Number" readonly> <?php } ?> 
						<div><a href="https://services.gst.gov.in/services/searchtp" onclick="myFunction1()" target="_blank">Copy And Verify</a></div>
					</div>
				<div class="col-sm-6" style="background-color:white;">Rate : (Rs/M.T)</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="rate" name="rate" value="<?php echo $_POST['rate']; ?>" placeholder="Rate : (Rs/M.T)" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Amount : (Rs)</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="amount" name="amount" value="<?php echo $_POST['amount']; ?>" placeholder="Amount : (Rs)" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">CGST : (2.5%) (Rs)</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="cgst" name="cgst" value="<?php echo $_POST['cgst']; ?>" placeholder="IGST : (5%)" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">SGST : (2.5%) (Rs)</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="sgst" name="sgst" value="<?php echo $_POST['sgst']; ?>" placeholder="IGST : (5%)" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Amount After Tax</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="amountaftertax" name="amountaftertax" value="<?php echo $_POST['amountaftertax']; ?>" placeholder="Amount After Tax" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">CESS 400/M.T (Rs)</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="cess" name="cess" value="<?php echo $_POST['cess']; ?>" placeholder="CESS 400/M.T" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Total Amount (Rs)</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="totalamount" name="totalamount" value="<?php echo $_POST['totalamount']; ?>" placeholder="Total Amount" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">TCS 1% (Rs)</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="tcs" name="tcs" value="<?php echo $_POST['tcs']; ?>" placeholder="Total Amount" readonly>
					</div>
				<div class="col-sm-6" style="background-color:white;">Grand Total (Rs)</div>
					<div class="col-sm-6" style="background-color:white;">
						<input type="text" class="form-control" id="grandtotal" name="grandtotal" value="<?php echo $_POST['grandtotal']; ?>" placeholder="Grand Total" readonly>
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
  <button type="submit" class="btn btn-success" name="submit" id="submit">Preview</button>
  </center>
</div>
</form>
</br>	

<footer class="container-fluid text-center">
  <p>&copy Hira Coal Mines Pvt Ltd. | 2018-2020</p>
</footer>

</body>
</html>		
