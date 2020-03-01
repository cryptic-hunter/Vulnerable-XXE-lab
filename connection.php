<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password);
if ($conn) {
	#echo "Connection Successful";
} else { 
echo "Please check your connection string";
die("Connection failed: " . mysqli_connect_error());
}
?>