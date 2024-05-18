<?php 
    require_once('db/admin_check.php');
	require_once('db/connection.php');
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
</body> 
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
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var billpartyname = $('#billpartyname').text();  
        var suppliername = $('#suppliername').text();    
        var billpartyaddress = $('#billpartyaddress').text();   
        var billpartygstin = $('#billpartygstin').text();   
        var owner = $('#owner').text();   
        var ph_1 = $('#ph_1').text();   
        var ph_2 = $('#ph_2').text();   
        var ph_3 = $('#ph_3').text();   
        var firm_type = $('#firm_type').text(); 
        if(billpartyname == '')  
        {  
            alert("Enter Bill Party Name");  
            return false;  
        }  
        if(suppliername == '')  
        {  
            alert("Enter Supplier Name");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{billpartyname:billpartyname, suppliername:suppliername, billpartyaddress:billpartyaddress, billpartygstin:billpartygstin, owner:owner, ph_1:ph_1, ph_2:ph_2, ph_3:pn_3, firm_type:firm_type},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.billpartyname', function(){  
        var id = $(this).data("id1");  
        var billpartyname = $(this).text();  
        edit_data(id, billpartyname, "billpartyname");  
    });  
    $(document).on('blur', '.suppliername', function(){  
        var id = $(this).data("id2");  
        var suppliername = $(this).text();  
        edit_data(id,suppliername, "suppliername");  
    });   
    $(document).on('blur', '.billpartyaddress', function(){  
        var id = $(this).data("id3");  
        var billpartyaddress = $(this).text();  
        edit_data(id,billpartyaddress, "billpartyaddress");  
    });  
    $(document).on('blur', '.billpartygstin', function(){  
        var id = $(this).data("id4");  
        var billpartygstin = $(this).text();  
        edit_data(id,billpartygstin, "billpartygstin");  
    });  
    $(document).on('blur', '.owner', function(){  
        var id = $(this).data("id5");  
        var owner = $(this).text();  
        edit_data(id,owner, "owner");  
    });  
    $(document).on('blur', '.ph_1', function(){  
        var id = $(this).data("id6");  
        var ph_1 = $(this).text();  
        edit_data(id,ph_1, "ph_1");  
    });  
    $(document).on('blur', '.ph_2', function(){  
        var id = $(this).data("id7");  
        var ph_2 = $(this).text();  
        edit_data(id,ph_2, "ph_2");  
    });
    $(document).on('blur', '.ph_3', function(){  
        var id = $(this).data("id8");  
        var ph_3 = $(this).text();  
        edit_data(id,ph_3, "ph_3");  
    });   
    $(document).on('blur', '.firm_type', function(){  
        var id = $(this).data("id9");  
        var firm_type = $(this).text();  
        edit_data(id,firm_type, "firm_type");  
    });
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>