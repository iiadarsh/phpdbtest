<?php

//$dbhost = 'localhost:3306';
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = 'myuser';
$dbpwd = 'Ankur2108';
$dbname = 'mydatabase';

echo ("dbhost : $dbhost");
echo ("dbport : $dbport");
echo ("dbuser : $dbuser");
echo ("dbpwd : $dbpwd");
echo ("dbname : $dbname");

//$connection = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);
$connection = mysqli_connect($dbhost.":".$dbport,$dbuser,$dbpwd,$dbname);
if(!$connection){
   echo("could not connect to database");
}else{
  echo("Connected to database.<br>");
}

//$dbconnection = mysql_select_db($dbname);

$query = "SELECT * from login";

$rc = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($rc)){
        echo $row['user_id'] ." " . $row['first_name'] . "\n";
}

mysqli_free_result($rc);

mysqli_close($connection);

?>