<?php
 require "config.php";

 
?>
<html>
	<head>
		<title>Developer Login</title>
		<link rel="stylesheet" href="styles/devloginstyle.css">
		<link rel="stylesheet" href="styles/mainstyle.css">
	</head>
	<body>

	<center>
	<div id="frame">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form"><br>
	<b>Developer Login</b><br><br>
	User name<br>
	<input type="text" name="uname" class="text"/><br><br>
	Password<br>
	<input type="password" name="upwd" class="text"/><br><br>
	<center><input type="submit" value="Sign in" id="confirm" name="submitbtn"/></center><br>
	<a href="https://www.facebook.com/" id="facebook">F sign in with facebook</a><br><br>
	<a href="https://www.google.com/" id="google">G Sign in with Google</a>
	</form>
	</div>
	<br>
	<center>Don't have a developer account? Click here to  <a href="devsignup.html" class="buttons">Sign up</a></center>
	</center>
	<br>
	
<?php
if(isset($_POST["submitbtn"]))
{
 $sql = "SELECT * FROM developers";
 $username = $_POST["uname"];
 $password = $_POST["upwd"];
 
 $results = $conn->query($sql);
 
 if($results->num_rows > 0)
 {
	 while($row = $results->fetch_assoc())
	 {
		 if($row["username"] ==  $username && $row["password"] == $password)
		 {
			$logged = 1;
			break;
			
			
		 }
		 else
		 {
			 $logged = 0;
		 }
	 }
	 if($logged == 1)
	 {
		 echo ("<script>
        window.alert('Successfully logged');
       window.location.href='uploadapp.html';
        </script>");
	 }
	 else
	 {
		echo ("<script>
        window.alert('Incorrect username or password');
       window.location.href='DevLogin.php';
        </script>");
	 }
 }
}


?>
	
	<hr>
<div class="headerfooterborder">
<img src="images/appnet logo.png" width="60px" height="60px" align="left">
<h2>AppNet</h2><br><br>
<h3 align="center">Company</h3>
<p id="footerlinks" align="center">
<a href = "aboutus.html">About_us</a>
<a href = "Careers.html">Careers</a>
<a href = "legal information.html">Legal_polices</a>
</p>
<div align="right">
<img src="images/whatsapp.png" width="30px" height="30px">
<a href="https://www.facebook.com/"><img src="images/facebook.png" width="30px" height="30px"></a>
<a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><img src="images/twitter.png" width="30px" height="30px"></a>
<a href="https://www.instagram.com/accounts/login/"><img src="images/insta.png" width="30px" height="30px"></a>
</div>
</div>
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 