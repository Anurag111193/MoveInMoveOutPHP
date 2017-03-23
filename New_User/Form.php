<html>
<body>
<?php


$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
die('Could not connect:'.mysql_error());
}
if(! get_magic_quotes_gpc() ) {
	$name = addslashes ($_POST['name']);
    $address = addslashes ($_POST['address']);
	$DOB = addslashes ($_POST['DOB']);
    $email_id = addslashes ($_POST['email_id']);
	$password = addslashes ($_POST['password']);
               
}
else{
	
	$name = $_POST['name'];
	$address=$_POST['address'];
	$dob=$_POST['DOB'];
	$email_id=$_POST['email_id'];
	$password=$_POST['password'];
}

$sql="INSERT INTO new_user"."(name,address,DOB,email_id,password)VALUES"."('$name','$address','$dob','$email_id','$password')";
mysql_select_db('mimo');
$retval=mysql_query($sql,$conn);
if(!$retval)
{
	die('Could not enter data:'.mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);


	
?>
<form method="POST" action="<?php $_PHP_SELF ?>">

Name:
<input type="TEXT" name="txtName" id="txtID"></input><br/>
Address:
<input type="TEXT" name"txtAddress" id="txtAddress"></input><br/>
Date Of Birth:
<input type="TEXT" name="txtDate" id="txtDate"></input><br/>
Email_Id:
<input type="TEXT" name="txtEmail" id="txtEmail"></input><br/>
Password:
<input type="TEXT" name="txtPassword" id="txtPassword"></input><br/>
<input type="SUBMIT" name="btnSubmit" id="btnSubmit" value="SUBMIT"/>

</form>

</body>
</html>
