function mysqlEnd()
{
global $connection;
global $db;
unset($db);
unset($connection);
}