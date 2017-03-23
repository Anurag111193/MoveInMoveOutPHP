<?php
   
   if(isset($_POST["btnSubmit"]))
   {
    $user_id = $_POST["txtuser_id"];
	$furni = $_POST["txtFurnitures"];
	$elec_gadgets = $_POST["txtElectronic_gadgets"];	
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = "INSERT INTO items " . " (User_id,Furnitures,Electronic_gadgets) " . " VALUES ( '$user_id', '$furni', '$elec_gadgets');";
      
   mysql_select_db('mimo');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   }
   mysql_close($conn);
?>
