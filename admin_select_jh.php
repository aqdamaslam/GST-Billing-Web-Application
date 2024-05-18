<?php 
	require_once('db/admin_check.php');
	require_once('db/connection.php');   
 $output = '';  
 $sql = "SELECT * FROM jharkhand ORDER BY id DESC";  
 $result = mysqli_query($connection, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="40%">User Name</th>  
                     <th width="40%">Password</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="username" data-id1="'.$row["id"].'" contenteditable>'.$row["username"].'</td>  
                     <td class="password" data-id2="'.$row["id"].'" contenteditable>'.$row["password"].'</td>  
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
					<td id="username" contenteditable></td>  
					<td id="password" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>