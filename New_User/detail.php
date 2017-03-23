<h2>For furthur details please contact to the seller from the information given below...</h2>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';	
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   $btnid;
   
   
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * from move_out ';
   mysql_select_db('mimo');
   
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Name :{$row['Name']}  <br> ".
         "Address : {$row['Room_Address']} <br> ".
         "Room_Cost : {$row['Room_cost']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
	