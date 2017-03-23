<!DOCTYPE html>

<html lang="en">
<head>
  <title>Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<table >
<tr><td>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mimo";

$name = $_GET['name'];
echo '<h2>Welcome '.$name.'....!!!</h2>';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM move_out where  name='".$name."'";
$result = $conn->query($sql);



echo "<table class='table'>";
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
	//$id=$row["User_id"];
        echo "<tr>";
		
		echo "<tr><td><th>City :</th></td><td>" . $row["City"]."</td></tr>";
		echo "<tr><td><th>Name :</th></td><td>" . $row["Name"]."</td></tr>";
		echo"<tr><td><th>Date of leaving :</th></td><td>". $row["Date_of_leaving"]."</td></tr>";
		echo"<tr><td><th>Contact_no :</th></td><td>". $row["Contact_no"]."</td></tr>";
		echo "<tr><td><th>No of rooms :</th></td><td>" . $row["No_of_rooms"]."</td></tr>";
		echo "<tr><td><th>Room cost :</th></td><td>" . $row["Room_cost"]."</td></tr>";
		
		echo "</tr><tr><hr></tr>";
	}
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</td></tr>
</table>
</html>