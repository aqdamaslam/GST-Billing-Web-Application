<?php

	require_once('db/rightclick.php');
	
$error=''; 

include "db/connection.php";
if(isset($_POST['submit']))
{				
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	
	//admin
	$query1 = mysqli_query($connection, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query1) == 0)
	{
		$error = "Username or Password is invalid";
	}
	else
	{
		$row1 = mysqli_fetch_assoc($query1);
		$_SESSION['username']=$row1['username'];
		$_SESSION['admin'] = $row1['level'];
		
		if($_SESSION['admin'] == $row1['level'])
		{
			header("Location: admin_add_emp.php");
		}
		else
		{
			$error = "Failed Login";
		}
	}
	
	//up
	$query2 = mysqli_query($connection, "SELECT * FROM up WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query2) == 0)
	{
		$error = "Username or Password is invalid";
	}
	else
	{
		$row2 = mysqli_fetch_assoc($query2);
		$_SESSION['username']=$row2['username'];
		$_SESSION['up'] = $row2['level'];
		
		if($_SESSION['up'] == $row2['level'])
		{
			header("Location: up_login.php");
		}
		else
		{
			$error = "Failed Login";
		}
	}
	
	//jharkhand
	$query3 = mysqli_query($connection, "SELECT * FROM jharkhand WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query3) == 0)
	{
		$error = "Username or Password is invalid";
	}
	else
	{
		$row3 = mysqli_fetch_assoc($query3);
		$_SESSION['username']=$row3['username'];
		$_SESSION['jh'] = $row3['level'];
		
		if($_SESSION['jh'] == $row3['level'])
		{
			header("Location: jh_login.php");
		}
		else
		{
			$error = "Failed Login";
		}
	}
}

			
?>