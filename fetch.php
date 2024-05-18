<?php
//fetch.php
    require_once('db/admin_check.php');
	require_once('db/connection.php');
	require_once('db/rightclick.php');
	
$request = mysqli_real_escape_string($connection, $_POST["query"]);
$query = "
 SELECT * FROM cust_reg WHERE billpartyname LIKE '%".$request."%'
";

$result = mysqli_query($connection, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["billpartyname"];
 }
 echo json_encode($data);
}

?>