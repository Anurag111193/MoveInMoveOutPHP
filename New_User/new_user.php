<html>
  <body>
     <?php
	if(isset($_POST['add'])) {
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';

$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
die('Could not connect:'.mysql_error());
}
if(! get_magic_quotes_gpc() ) {
               $Name = addslashes ($_POST['Name']);
               $Address = addslashes ($_POST['Address']);
               $DOB = addslashes ($_POST['DOB']);
               $Email = addslashes ($_POST['Email']);
               $Password = addslashes ($_POST['Password']);
            }else {
	$Name = $_POST['Name'];
	$Address = $_POST['Address'];
	$DOB = $_POST['DOB'];
	$Email = $_POST['Email'];	
	$Password = $_POST['Password'];

            }
    $sql = "INSERT INTO new_user ". "(Name, Address, DOB, 
               Email, Password) ". "VALUES('$Name','$Address',$DOB,$Email, $Password)";
               
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
          mysql_close($conn);
         }else {
            ?>
        
<form method = "POST" action="<?php $_PHP_SELF ?>">
	<table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
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
                           <input type="SUBMIT" name="btnSubmit" id="btnSubmit value="Submit">
                        </td>
	     
                        <td>
                           <input type="RESET" name="btnReset" id="btnReset value="Reset">
                        </td>
                     </tr>
                  
                  </table>	
 </form>

    <?php
         }
      ?>
   
 </body>
</html>