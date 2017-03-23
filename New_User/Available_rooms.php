
<?php
if(isset($_POST["btnSubmit"]))
   {
    $location = $_POST["txtCity"];
	$date_of_joining = $_POST["Joining"];
	$Room_size = $_POST["txtSize"];
	//$No_of_rooms=$_POST["txtno"]
	$Room_setup = $_POST["txtSetup"];
	$Room_cost = $_POST["txtCost"];
	$Otherhousewares = $_POST["txtOtherhousewares"];
	
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

$sql = "SELECT City,Date_of_leaving,Room_cost,Room_size,Room_setup,Otherhousewares from move_out";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>City</th><th>Date_of_leaving</th><th>Room_cost</th><th>Room_size</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["City"]. "</td><td>" . $row["Date_of_leaving"]. " " . $row["Room_cost"]. "</td><td>" . $row["Room_size"].  "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

?>