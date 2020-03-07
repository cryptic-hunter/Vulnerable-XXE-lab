<?php
require('connection.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	if($username === "admin" && $password === "admin@123" && $email === "admin@admin.com")
	{
		$sql = "SELECT email from regn_form WHERE username = '$username' and password = '$password'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC) or die(mysqli_error($conn)) ;
		$count = mysqli_num_rows($result);
		if($count == 1)
		{
			$_SESSION['login_user'] = $username;
			header("location: home.php");
		} else {
			$error = "Your login Name or Password is invalid";
			echo $error;
		}
	}
}
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>E-Mail  :</label><input type = "email" name = "email" class = "box" /><br/><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>					
            </div>
         </div>			
      </div>
   </body>
</html>