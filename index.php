<?php
	require("connection.php"); 
?>
<html>
<title>Not just a CTF</title>
<script src = "script.js"></script>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
	}
	li {
		float: left;
	}

	li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none ;
	}
	li a:hover {
background-color: #111;	
}
	li button {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none ;
	}
	li button:hover {
background-color: #111;	
}
</style>
</head>

<body>
	<ul>
		<li><a class="active" href="index.php">Home</a></li>
		<li><a class="active" href="login.php">Login</a></li>
		<li><a class="active" href="register.php">Register</a></li>
		<li><a class="active" href="contact.php">Contact Us</button></li>
	</ul>
	<div class = "center">
		<h1>Welcome to the dark world</h1>
	</div>
</body>
</html>

