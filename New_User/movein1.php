<?php
    $location = $_GET["txtCity"];
	$date_of_joining = $_GET["Joining"];
	$Room_size = $_GET["txtSize"];
	$Room_setup = $_GET["txtSetup"];
	$Room_cost = $_GET["txtCost"];
	$Otherhousewares = $_GET["txtOtherhousewares"];
	$Room_no = $_GET["txtno"];
   
  
  echo $Room_size;
	echo $Room_no;
  
   if(isset($_POST["btnSubmit"]))
   {
    
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = "INSERT INTO move_in " . " (Location,Room_size,No_of_rooms,Room_setup,Room_cost,date_of_joining,Otherhousewares) " . " VALUES ( '$location', '$Room_size','$No_of_rooms', '$Room_setup', '$Room_cost', '$date_of_joining' ,'$Otherhousewares');";
      
   mysql_select_db('mimo');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   //echo "Entered data successfully\n";
   }
   mysql_close($conn);
?>

<html>

<head>
<style>
table{
font-family:arial,sans-serif;
border-collapse:collapse;
width:100%;
}
tr:nth-child(even){
background-color:#dddddd;
}
</style>
</head>
<body>
<h2>Rooms Available related to your search...<h2>
<table border="black">
<tr border="black">
<td>

</td>
</tr>
<tr>
<td>

</td>
</tr>
<table>
</body>
</html>

<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT City,Date_of_leaving,Contact_no,Room_cost,Room_size,No_of_rooms from move_out';
   mysql_select_db('mimo');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "City :{$row['City']}  <br> ".
         "Date_of_leaving : {$row['Date_of_leaving']} <br> ".
         "Room_cost : {$row['Room_cost']} <br> "."Room_size: {$row['Room_size']} <br> ".
         "--------------------------------<br>";
   }
   
   //echo "Fetched data successfully\n";
   
   mysql_close($conn);
   
   
?>