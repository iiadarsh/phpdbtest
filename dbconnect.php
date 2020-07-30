<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = 'root';
$dbpwd = getenv("MYSQL_ROOT_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");

echo "dbhost : $dbhost";
echo "dbport : $dbport";
echo "dbuser : $dbuser";
echo "dbpwd : $dbpwd";
echo "dbname : $dbname";

$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd);
if (!$connection) {
    printf("Couldn't connect to database");
    exit();
} else {
    printf("Connected to the database.<br>");
}

$dbconnection = mysql_select_db($dbname);

$query = "SELECT * from users";

$rc = mysql_query($query);

while($row = mysql_fetch_assoc($rc)){
	echo $row['user_id'] ." " . $row['username'] . "\n";	
}

mysql_close();

?>
