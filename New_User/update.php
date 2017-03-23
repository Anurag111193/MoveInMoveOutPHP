<?php
if(isset($_POST["btnUpdate"]))
{

   $name = $_POST["Name"];
	$addr = $_POST["Address"];
	$email = $_POST["Email"];	
	$pwd = $_POST["Password"];
	$id=$_POST["Id"];
   
    $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) 
   {
      die('Could not connect: ' . mysql_error());
   }	
   
   $sql="UPDATE new_user SET Name = '$name' WHERE User_id = '$id'" ;
	mysql_select_db('mimo');
	
	
	
	
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
	   {
               die('Could not update data: ' . mysql_error());
       }
	   else
	   {
            echo "Updated data successfully\n";
}}
            mysql_close($conn);	

?>



<html>
   <body>
   
      <form action = "update.php" method = "POST">
          <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
					 <center>
					 <tr>
					 <td width="100">Id</td>
					 
					 <td>
					 <input name = "Id" type = "text" 
                           id = "User_id">
					 </td>
					 </center>
                  
                     <tr>
                        <td width = "100">Name</td>
                        <td><input name = "Name" type = "text" 
                           id = "Name"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Address</td>
                        <td><input name = "Address" type = "text" 
                           id = "Address"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Date Of Birth</td>
                        <td><input name = "DOB" type = "text" 
                           id = "DOB"></td>
                     </tr>
                  
	   <tr>
                        <td width = "100">Email-id</td>
                        <td><input name = "Email" type = "text" 
                           id = "Email"></td>
                     </tr>
                                  
                     <tr>
                        <td width = "100">Password</td>
                        <td><input name = "Password" type = "text" 
                           id = "Password"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        
                        <td>
                           <input type="Submit" name="btnSubmit" id="btnSubmit value="SUBMIT" >
                        </td>
							 <td>
					  <input type="Submit" name="btnUpdate" id="btnUpdate" value="UPDATE" ></td>
                       
                     </tr>
					
                  
                  </table>	
      </form>
  
   </body>
</html>