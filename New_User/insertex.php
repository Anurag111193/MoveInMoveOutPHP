<?php
$dbhost='localhost';
$dbuser='root;
$dbpass=rootpassword';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
die('Could not connect:'.mysql_error());

}
$sql='INSERT INTO new_user'.'(name,address,dob,email,password)'.'VALUES("mansi","mahal",30/04/1995,"mansi@gmail.com","mansi")';
mysql_select_db('mimo');
$retval=mysql_query($sql,$conn);
if(!$retval)
{
	die('Could not enter data:'.mysql_error());
	
}
echo "Entered data successfully\n";
mysql_close($conn);
?>