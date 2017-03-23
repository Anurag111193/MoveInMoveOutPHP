function executeQuery($QueryToFire)
{
global $connection;
global $db;
if(isset($connection)&&isset($db))
{
	mysql_query($QueryToFire,$connection);
	$result=mysql_insert_id($connection);
	return $result;
}
else
{
	return -1;
}
}
