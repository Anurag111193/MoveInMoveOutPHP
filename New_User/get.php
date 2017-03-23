
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mimo";

$city = $_GET['city'];
$budget = $_GET['budget'];
$room = $_GET['room'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM move_out where City='".$city."' AND No_of_rooms>=".$room." AND Room_cost<=".$budget;
$result = $conn->query($sql);



echo "<table class='table'>";
echo "<tr><td>City</td><td>Name</td><td>Date_of_leaving</td><td>Contact_no</td><td>No_of_rooms</td><td>Room_cost</td><td></td></tr>";
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
	//$id=$row["User_id"];
        echo "<tr>";
		
		echo "<td>" . $row["City"]."</td>";
		echo "<td>" . $row["Name"]."</td>";
		echo"<td>". $row["Date_of_leaving"]."</td>";
		echo"<td>". $row["Contact_no"]."</td>";
		echo "<td>" . $row["No_of_rooms"]."</td>";
		echo "<td>" . $row["Room_cost"]."</td>";
		echo "<tr>";
		echo "<td><input type='button' class='btn btn-primary' onclick='buy(this.name);' name='". $row["Name"]."' value='Buy'> &nbsp;&nbsp;</td><td><input class='btn btn-primary' type='button' onclick='rent(this.name);' name='". $row["Name"]."' value='On Rent'></td></tr>";
	echo "</tr>";
	echo "</tr>";

	}
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>