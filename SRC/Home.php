<?php

require "config.php";

 session_start();


?>

<!DOCTYPE html>
<html>
<head>
<title>AppNet.com</title>
<link rel="stylesheet" href="styles/mainstyle.css">
<link rel="stylesheet" href="styles/Homepgstyles.css">
</head>
<body>
<div class="headerfooterborder">


<?php
  if(isset($_SESSION["logged_user"])){
	  
	  $email=$_SESSION["logged_user"];
	  $sql='SELECT * FROM useraccounts';
	  $result=$conn->query($sql);
	  echo '<div style="float: right;">';
	   if($result->num_rows > 0)
       {
	    while($row = $result->fetch_assoc())
	    {
			if($row["email"] ==  $email){
				
			   echo "<h2>Hello"."  ".$row["firstname"]."!</h2>";
			}
		}
	    }
	   echo '</div>';
  }
  else{
    echo '<div style="float: right;">';
    echo '<a href="login.php" class="header">Login</a><br><br>';
    echo '<a href="signupform.html" class="header">Sign up</a>';
    echo '</div>';
  }
  
?>

<br><br>

<img src="images/appnet logo.png" width="85px" height="80px" align="left">
<h1>AppNet</h1><br><br>
<ul>
<li><a href="#">Home</a></li>
<li class="dropdown"><a href="#" class="dropbtn">Categories</a>
<div class="dropcontent">
 <a href="music.php">Music</a>
 <a href="education.php">Education</a>
 <a href="finance.php">Finance</a>
 <a href="games.php">Games</a>
 <a href="lifestyle.php">Lifestyle</a>
</div></li>
<li><a href="devLogin.php">Upload an App</a></li>

</ul>
</div>

<br>
<center><img src="images/homepic1.png" alt="Apps general picture" width="520px" height="250px"></center>
<br>

<fieldset>
<h2>Recommended for you</h2>
<center>
<div class="appBox">
<center><img src="images/uberApp.jpg" alt="Uber app icon" class="icon">
<h4>Uber</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/halfRatingimg.png" alt="star" width="20px" height="20px"><br>
<p>With Uber your destination is at your fingertips.Just get the app and 
enter where you want to go and our drivers will help you get there.</p>
<a href="RateReview.php" class="rateApp">Rate</a><br><br>
<a href="checkloginDownload.php" class="getApp">Download</a>
</center>

</div>

<div class="appBox">
<center><img src="images/needforspeed.png" alt="Need for speed app icon" class="icon">
<h4>Need for speed</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px"><br>
<p>Race down the lane with the latest edition NeedForSpeed.Build the ride 
that shows your style with our wide range of cars.</p>
<a href="RateReview.php" class="rateApp">Rate</a><br><br>
<a href="checkloginBuy.php" class="getApp">Buy</a>
</center>
</div>

<div class="appBox">
<center><img src="images/snapchat.png" alt="Snapchat app icon" class="icon">
<h4>Snapchat</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px"><br>
<p>Snapchat allows you to snap and share your moments,try out different 
lenses and streak with your friends.<br>Happy snapping!</p>
<a href="RateReview.php" class="rateApp">Rate</a><br><br>
<a href="checkloginDownload.php" class="getApp">Download</a>
</center>
</div>

<div class="appBox">
<center><img src="images/Grammarly.png" alt="Grammarly app icon" class="icon">
<h4>Grammarly</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/halfRatingimg.png" alt="star" width="20px" height="20px"><br>
<p>Grammarly provides the best writing suggestions.Includes sophisticated 
grammar checks,synonym finders and many more.</p>
<a href="RateReview.php" class="rateApp">Rate</a><br><br>
<a href="checkloginBuy.php" class="getApp">Buy</a>
</center>
</div>

<div class="appBox">
<center><img src="images/NetflixApp.png" alt="Netflix app icon" class="icon">
<h4>Netflix</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px"><br>
<p>Looking for the most talked about TV show or movie?They are all on Netflix.
Create your own account for a personalized experience</p>
<a href="RateReview.php" class="rateApp">Rate</a><br><br>
<a href="checkloginDownload.php" class="getApp">Download</a>
</center>
</div>
</fieldset>
</center>



<br><br>

<fieldset>
<h2>Top 10 trending apps this week</h2>
<center>
<div class="appBox">
<h3>Trending No 1</h3>
<h3>Catergory : Music</h3>
<center><img src="images/youtubemusic.png" alt="youtubemusic app icon" class="icon">
<h4>YouTubeMusic</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/halfRatingimg.png" alt="star" width="20px" height="20px"><br><br>
<a href="checkloginDownload.php" class="getApp">Get it now</a>
</center>
</div>

<div class="appBox">
<h3>Trending No 2</h3>
<h3>Catergory : Lifestyle</h3>
<center><img src="images/pinterest.png" alt="Pinterest app icon" class="icon">
<h4>Pinterest</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px"><br><br>
<a href="checkloginDownload.php" class="getApp">Get it now</a>
</center>
</div>

<div class="appBox">
<h3>Trending No 3</h3>
<h3>Catergory : Music</h3>
<center><img src="images/spotify.png" alt="Spotify app icon" class="icon">
<h4>Spotify</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px"><br><br>
<a href="checkloginDownload.php" class="getApp">Get it now</a>
</center>
</div>

<div class="appBox">
<h3>Trending No 4</h3>
<h3>Catergory : Education</h3>
<center><img src="images/linkedinLearning.png" alt="LinkedIn Learning app icon" class="icon">
<h4>LinkedIn Learning</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px"><br><br>
<a href="checkloginDownload.php" class="getApp">Get it now</a>
</center>
</div>

<div class="appBox">
<h3>Trending No 5</h3>
<h3>Catergory : Games</h3>
<center><img src="images/minecraft.jpg" alt="Minecraft game icon" class="icon">
<h4>Minecraft</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/halfRatingimg.png" alt="star" width="20px" height="20px"><br><br>
<a href="checkloginDownload.php" class="getApp">Get it now</a>
</center>
</div>

<br><br>

<div class="appBox">
<h3>Trending No 6</h3>
<h3>Catergory : Finance</h3>
<center><img src="images/paypal.png" alt="Paypal app icon" class="icon">
<h4>Paypal</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px"><br><br>
<a href="checkloginDownload.php" class="getApp">Get it now</a>
</center>
</div>

<div class="appBox">
<h3>Trending No 7</h3>
<h3>Catergory : Education</h3>
<center><img src="images/kahoot.jpg" alt="Kahoot app icon" class="icon">
<h4>Kahoot</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px"><br><br>
<a href="checkloginDownload.php" class="getApp">Get it now</a>
</center>
</div>

<div class="appBox">
<h3>Trending No 8</h3>
<h3>Catergory : Lifestyle</h3>
<center><img src="images/insta.png" alt="Instagram app icon" class="icon">
<h4>Instagram</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px"><br><br>
<a href="checkloginDownload.php" class="getApp">Get it now</a>
</center>
</div>

<div class="appBox">
<h3>Trending No 9</h3>
<h3>Catergory : Finance</h3>
<center><img src="images/iqOption.png" alt="IQ Option app icon" class="icon">
<h4>IQ Option</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/halfRatingimg.png" alt="star" width="20px" height="20px"><br><br>
<a href="checkloginDownload.php" class="getApp">Get it now</a>
</center>
</div>

<div class="appBox">
<h3>Trending No 10</h3>
<h3>Catergory : Games</h3>
<center><img src="images/pubg.jpg" alt="Pubg game icon" class="icon">
<h4>Pubg</h4>
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/ratingImg.png" alt="star" width="20px" height="20px">
<img src="images/halfRatingimg.png" alt="star" width="20px" height="20px"><br><br>
<a href="checkloginDownload.php" class="getApp">Get it now</a>
</center>
</div>
</fieldset>
</center>
<br><br>
<div align="right">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" value="Log out" name="logout" id="logout">
</form>
</div>
<br><br>

<?php

if(isset($_POST["logout"]))
{
	if(isset($_SESSION["logged_user"]))
	{
		session_destroy();
		
		echo ("<script>
		window.alert('Logged out');
		window.location.href='Home.php';
		</script>");
	}
	else
	{
		echo ("<script>
		window.alert('Not logged in yet');
		window.location.href='Home.php';
		</script>");
	}
	
}



?>


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


