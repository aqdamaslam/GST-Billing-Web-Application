<?php

	require_once('db/values.php');
	require_once('db/rightclick.php');

if(isset($_REQUEST['term'])){
    // Prepare a select statement
    $sql = "SELECT * FROM cust_reg WHERE billpartyname LIKE ?";
	$output = '';
    
    if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST['term'] . '%';
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();
            // Check number of rows in the result set
            if($result->num_rows > 0){
                // Fetch result rows as an associative array
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    echo "<p><td>" . $row["billpartyname"] . "</td></p>";
                    echo "<th>" . $row["billpartyaddress"] . "</th>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    $stmt->close();
}
else if(isset($_REQUEST['term1'])){
    // Prepare a select statement
    $sql1 = "SELECT * FROM cust_reg WHERE billpartyname LIKE ?";
    
    if($stmt1 = $mysqli->prepare($sql1)){
        // Bind variables to the prepared statement as parameters
        $stmt1->bind_param("s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST['term1'] . '%';
        
        // Attempt to execute the prepared statement
        if($stmt1->execute()){
            $result1 = $stmt1->get_result();
            
            // Check number of rows in the result set
            if($result1->num_rows > 0){
                // Fetch result rows as an associative array
                while($row = $result1->fetch_array(MYSQLI_ASSOC)){
                    echo "<p><td>" . $row["billpartyname"] . "</td></p>";
                    echo "<th>" . $row["billpartyaddress"] . "</th>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
        }
    }
     
    // Close statement
    $stmt1->close();
}
 
// Close connection
$mysqli->close();
?>
