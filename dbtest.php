<?php

$dbhost = getenv("MYSQL_SERVICE_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_SERVICE_PORT");
$dbuser = 'root';
$dbpwd = getenv("MYSQL_ROOT_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");

echo ("dbhost : $dbhost");
echo ("dbport : $dbport");
echo ("dbuser : $dbuser");
echo ("dbpwd : $dbpwd");
echo ("dbname : $dbname");

$connection = mysql_connect($dbhost.":".$dbport,$dbuser,$dbpwd);
if(!$connection){
   echo("could not connect to database");
}else{
  echo("Connected to database.<br>");
}

$dbconnection = mysql_select_db($dbname);

$query = "SELECT * from login";

$rc = mysql_query($query);
while($row = mysql_fetch_assoc($rc)){
	echo $row['user_id'] ." " . $row['first_name'] . "\n";	
}

mysql_close();

?>
