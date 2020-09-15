<?php
 
//Define your Server host name here.
$HostName = "localhost";
 
//Define your MySQL Database Name here.
$DatabaseName = "fusiondcco_atlantic";
 
//Define your Database User Name here.
$HostUser = "root";
 
//Define your Database Password here.
$HostPass = ""; 
 
// Creating MySQL Connection.
$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
// Storing the received JSON into $json variable.
$json = file_get_contents('php://input');
 
// Decode the received JSON and Store into $obj variable.
$obj = json_decode($json,true);
 
// Getting name from $obj object.
$policy_number = $obj['policy_number'];
 
// Getting Email from $obj object.
$package_type = $obj['package_type'];
 
// Getting Password from $obj object.
$reason = $obj['reason'];


	 // Creating SQL query and insert the record into MySQL database table.
	 $Sql_Query = "insert into claims (policy_number,package_type,reason) values ('$policy_number','$package_type','$reason')";
	 
	 
	 if(mysqli_query($con,$Sql_Query)){
	 
		 // If the record inserted successfully then show the message.
		$MSG = 'Claims Submitted Successfully Expect a call from Atlantic' ;
		 
		// Converting the message into JSON format.
		$json = json_encode($MSG);
		 
		// Echo the message.
		 echo $json ;
	 
	 }
	 else{
	 
		echo 'Try Again';
	 
	 }
 
 mysqli_close($con);
?>