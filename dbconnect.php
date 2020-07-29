<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

echo "dbhost : $dbhost";
echo "dbport : $dbport";
echo "dbuser : $dbuser";
echo "dbpwd : $dbpwd";
echo "dbname : $dbname";

$connection = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n". mysqli_connect_error());
    exit();
} else {
    printf("Connected to the database");
}
mysqli_close($connection);
?>
