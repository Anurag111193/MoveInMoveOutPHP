<?php
$connection=null;
$db=null;
function mysqlStart
($ConnectionServer='localhost',$DatabaseName='MIMO')
{
global $connection;
global $bd;
$connection=mysql_connect($ConnectionServer,"root");
if(isset($db))
{
return true;
}
}
return false;
}