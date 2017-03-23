<?php
   
   if(isset($_POST["btnSubmit"]))
   {
   $name = $_POST["txtName"];
	$addr = $_POST["txtAddress"];
	$email = $_POST["txtEmail"];	
	$pwd = $_POST["txtPassword"];
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = "INSERT INTO new_user " . " (Name,Address,DOB,Email,Password) " . " VALUES ( '$name', '$addr', NOW(), '$email','$pwd');";
      
   mysql_select_db('mimo');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   }
   mysql_close($conn);
?>
