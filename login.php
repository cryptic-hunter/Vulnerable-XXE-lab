<?php
require("connection.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST") {
	$username = mysqli_real_escape_string($db,$_POST)
}
?>