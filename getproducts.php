<?php
 
//Define your Server host name here.
$HostName = "localhost";
 
//Define your MySQL Database Name here.
$DatabaseName = "fusiondcco_atlantic";
 
//Define your Database User Name here.
$HostUser = "root";
 
//Define your Database Password here.
$HostPass = ""; 
 
// Creating connection
$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
 
if ($conn->connect_error) {
 
 die("Connection failed: " . $conn->connect_error);
} 
 
// Creating SQL command to fetch all records from Flowers Table.
$sql = "SELECT * FROM packages";
 
$result = $conn->query($sql);
 
if ($result->num_rows >0) {
 
 
	 while($row[] = $result->fetch_assoc()) {
	 
	 $item = $row;
	 
	 $json = json_encode($item, JSON_NUMERIC_CHECK);
	 
	 }
 
} else {
	echo "No Data Found.";
}
 echo $json;
$conn->close();

?>