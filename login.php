<?php

require("DBInfo.inc");

// call the below service to login
//  http://localhost/twitter_webservice/TwitterAndroidServer/login.php?email=poojasanghvi@gmail.com&password=Ankur143
// when promting to app change localhost to 10.0.2.2

$query ="select * from login where email=  '" . $_GET['email'] . "' and password= '" . $_GET['password'] . "' ";

$result = mysqli_query($connect,$query);

if (!$result){
	die( 'Error cannot run the query');
}

$userInfo=array();

// reading only the first record 
while ($row= mysqli_fetch_assoc($result)) {
     $userInfo[] = $row;
     break;
}
	

//if data fetched pass the msg and userdata as jason file
if ($userInfo) {
	print("{'msg':'pass login','info':'".json_encode($userInfo)."'}");
}else{
	print("{'msg':'cannot login'}");
}

// free the result memory
mysqli_free_result($result);

mysqli_close($connect);


?>