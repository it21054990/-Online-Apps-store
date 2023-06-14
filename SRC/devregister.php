<?php
require "config.php";

// REGISTER USER
if (isset($_POST["reg_user"])) {
  // receive all input values from the form
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $qualification = $_POST["qualification"];


  $query = "INSERT INTO developers (username,email,password,qualifications) 
  			  VALUES('$username','$email','$password','$qualification')";
			  
  if($conn->query($query))
{
		echo ("<script>
		window.alert('Sign up Successful');
		window.location.href='uploadapp.html';
		</script>");
		
}
else
	{
		echo ("<script>
		window.alert('Sign up unsuccessful');
		window.location.href='devsignup.php';
		</script>");
	}
	
		$conn->close();
		
}

   ?> 
   
   