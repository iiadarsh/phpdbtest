<?php

require("DBInfo.inc");

// call the below service to register new person
//  http://localhost/twitter_webservice/TwitterAndroidServer/register.php?first_name=Pooja&email=poojasanghvi@gmail.com&password=Ankur143&picture_path=home/u.png

$query = "insert into login (first_name, email, password, picture_path)
		  values ('" . $_GET['first_name'] . "','" . $_GET['email'] . "','" . $_GET['password'] . "','" . $_GET['picture_path'] . "');" ;

$result = mysqli_query($connect,$query);

if (!$result){
	$output = "{ 'msg':'fail'}";
}else{
	$output = "{ 'msg':'user added successfully'}";
}

print($output);

mysqli_close($connect);


?>