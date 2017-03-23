function searchDatabase($QueryToFire)
{
global $connection;
global $db;
if(isset($connection)&&isset($db))
{
$result=mysql_query($QueryToFire,$connection);
$count=0;
while($row=mysql_fetch_array($result))
{
	$output[$count][$Column]=$row[$Column];
	$count=$count+1;
}
return $output;
}
return false;
}
