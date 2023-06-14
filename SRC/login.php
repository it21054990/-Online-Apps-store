
<?php
 require "config.php";
 
 session_start();


?>
<!DOCTYPE html>
<html>
<head>
<title>Log in</title>
<link rel="stylesheet" href="styles/mainstyle.css">
<link rel="stylesheet" href="styles/formstyle.css" >
<script src="js/java.js"> </script>
</head>
<body>
<div class="headerfooterborder">
<img src="images/appnet logo.png" width="85px" height="80px" align="left">
<h1>AppNet</h1><br><br>
</div>
<hr>
<center>


<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="box">
<h1> Log in! </h1> 
<a href="signupform.html">Don't have an account? Sign up here!</a></br></br>
 
    <label><b>Enter email address</br></label>
    <input type="text" placeholder="Enter email" id= "email" name="email" class="lginput" required >
	</br></br>

    <label>Enter password</br></label></b>
    <input type="password" placeholder="Enter password" id="psw" name="psw" class="lginput" required>
	</br></br>

    <button type="submit" class="btn" name="submitbtn">Login</button>
	
    <label>
	</br></br>
	
<div class="loginlinks">	
  <a href="#"  onclick="return confirm('Please check your email to reset password');">Forgot password?</a></br></br>	
  <a href="https://www.facebook.com/login.php">Log in with Facebook</a></br></br>
  <a href="https://accounts.google.com/Login">Log in with Google</a>
</div>	
 </div>
</form>	

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST["submitbtn"]))
{
 $sql = "SELECT * FROM useraccounts";
 $email = $_POST["email"];
 $password = $_POST["psw"];
 
 $results = $conn->query($sql);
 
 if($results->num_rows > 0)
 {
	 while($row = $results->fetch_assoc())
	 {
		 if($row["email"] ==  $email && $row["password"] == $password)
		 {
			$logged = 1;
			$_SESSION["logged_user"] = $email;
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
       window.location.href='Home.php';
        </script>");
	 }
	 else
	 {
		echo ("<script>
        window.alert('Login unsuccessful');
       window.location.href='login.php';
        </script>");
	 }
 }
}

}
?>



</center>

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
