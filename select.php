<?php 
    require_once('db/admin_check.php');
	require_once('db/connection.php');
	
 $output = '';  
 $sql = "SELECT * FROM cust_reg ORDER BY billpartyname";  
 $result = mysqli_query($connection, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>    
                     <th width="40%">Bill Party Name</th>  
                     <th width="40%">Supplier Name</th>    
                     <th width="40%">Bill Party Address</th>    
                     <th width="40%">Bill Party GSTIN</th>    
                     <th width="40%">Owner</th>    
                     <th width="40%">Phone Number 1</th>    
                     <th width="40%">Phone Number 2</th>    
                     <th width="40%">Phone Number 3</th>    
                     <th width="40%">Firm Type</th>      
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>    
                     <td class="billpartyname" data-id1="'.$row["id"].'" contenteditable>'.$row["billpartyname"].'</td>  
                     <td class="suppliername" data-id2="'.$row["id"].'" contenteditable>'.$row["suppliername"].'</td>   
                     <td class="billpartyaddress" data-id3="'.$row["id"].'" contenteditable>'.$row["billpartyaddress"].'</td>   
                     <td class="billpartygstin" data-id4="'.$row["id"].'" contenteditable>'.$row["billpartygstin"].'</td>   
                     <td class="owner" data-id5="'.$row["id"].'" contenteditable>'.$row["owner"].'</td>   
                     <td class="ph_1" data-id6="'.$row["id"].'" contenteditable>'.$row["ph_1"].'</td>   
                     <td class="ph_2" data-id7="'.$row["id"].'" contenteditable>'.$row["ph_2"].'</td>   
                     <td class="ph_3" data-id8="'.$row["id"].'" contenteditable>'.$row["ph_3"].'</td>    
                     <td class="firm_type" data-id9="'.$row["id"].'" contenteditable>'.$row["firm_type"].'</td> 
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }   
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
                <td id="billpartyname" contenteditable></td>  
                <td id="suppliername" contenteditable></td>   
                <td id="billpartyaddress" contenteditable></td>  
                <td id="billpartygstin" contenteditable></td>  
                <td id="owner" contenteditable></td>  
                <td id="ph_1" contenteditable></td>  
                <td id="ph_2" contenteditable></td>  
                <td id="ph_3" contenteditable></td>  
                <td id="firm_type" contenteditable></td> 
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>