<?php
session_start();

//checking if user already login
if(!isset($_SESSION['username'])){
    header('Location: index.php');
}

//checking user's level
if($_SESSION['up']!="up"){
    header('Location: index.php');
	
}
?>