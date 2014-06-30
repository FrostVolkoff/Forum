<?php 

$server	    = 'localhost';
$username	= 'root';
$password	= '';
$database	= 'dbForum';

$conn = mysql_connect($server, $username, $password);

if(! $conn)
{
 	die('Error: could not establish database connection' . mysql_error());
}
if(!mysql_select_db($database))
{
 	mysql_query("CREATE DATABASE $database");
}

$query_file = $_SERVER['DOCUMENT_ROOT'] . '/Stuff/db/connect/dbTables';

$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

mysql_select_db($database);
$retval = mysql_query($sql);

if(!$retval){
	exit("Cant Do nothing!");
}
mysql_close($conn)

?>