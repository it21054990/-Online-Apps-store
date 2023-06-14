<?php
 require "config.php";
 
 session_start();
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Games</title>
<link rel="stylesheet" href="styles/mainstyle.css">
<link rel="stylesheet" href="styles/categories.css">
<script src="js/categories.js"></script>
<!--code from https://stackoverflow.com/questions/27592595/how-can-i-make-my-website-automatically-zoom-out-to-90 used to automatically zoom out on page load-->
<script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "90%" 
        }
</script>

</head>
<body onload="zoom()">
<div class="headerfooterborder">

<img src="images/appnet logo.png" alt="appnetlogo" width="85px" height="80px" align="left">
<h1>AppNet</h1><br><br>
<ul>
<li><a href="Home.php">Home</a></li>
<li class="dropdown"><a href="#" class="dropbtn">Categories</a>
<div class="dropcontent">
 <a href="music.php">Music</a>
 <a href="education.php">Education</a>
 <a href="finance.php">Finance</a>
 <a href="#">Games</a>
 <a href="lifestyle.php">Lifestyle</a>
</div></li>
<li><a href="devLogin.php">Upload an App</a></li>
</ul>
</div>

<br><br>
<center>
<!--how to add a video referred from https://www.w3schools.com/html/html5_video.asp-->
<video width="1500" height="400" autoplay muted loop>
<source src="video/multimedia.mp4" type="video/mp4"><br><br>
</video>
</center>
<h1 id="heading">Games</h1>
<button style=" margin: 0px 0px 0px 80px;"class="paidFreebtn" type="button" id="freeapps" onclick="displayFreeApps('freeapps'); displayAllAppsfree();">Free Apps</button>
<button class="paidFreebtn" type="button" id="paidapps" onclick="displayPaidApps('paidapps'); displayAllAppspaid();">Paid Apps</button><br><br>


<div id="filter">
<h1 id = "demo"></h1>
<!--PUBG-->
<center>
<div  id="app1" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/pubg.jpg" alt="applogo" width="200px" height="200px">
</center>
<h3>PUBG</h3><br>
<div class="description">
<h4>Description</h4>
<p>PUBG is a free game exclusivley built for mobiles, featuring customizable controls. Play for free anywhere, anytime.
The game offers the best high resolution items and gameplay</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Free App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginDownload.php" class="getapp">Download</a>
</center>
</fieldset>
</div>

<!--Minecraft-->
<div  id="app2" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/minecraft.jpg" alt="applogo" width="180px" height="180px">
</center>
<h3>Minecraft</h3>
<div class="description">
<h4>Description</h4>
<p>Open up your creative skills with minecraft, start building from the simplest of homes to reach to build grand castles.
Create, explore and survive alone or with friends on mobile devices or Windows 10.</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Free App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginDownload.php" class="getapp">Download</a>
</center>
</fieldset>
</div>

<!--Oddmar-->
<div  id="app3" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/oddmar.jpg" alt="applogo" width="180px" height="180px">
</center>
<h3>Oddmar</h3>
<div class="description">
<h4>Description</h4>
<p>Get yourself busy in an epic Viking story animated as a motion comic. oddmar brings to you 24 spectacular 
hand-crafted levels of physics-based puzzles and platforming challenges.</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Free App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginDownload.php" class="getapp">Download</a>
</center>
</fieldset>
</div>

<!--LEGO Batman-->
<div  id="app4" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/legobatman.jpg" alt="applogo" width="180px" height="180px">
</center>
<h3>LEGO Batman</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>Explore the action-packed adventure in LEGO Batman! 
Play as Batman join forces with characters from the DC Comics universe as you shoot off to outer space to stop the evil Brainiac from destroying Earth.</p>
</div>
<img src="images/3 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $4.99</a>
</center>
</fieldset>
</div>

<!--Galaxy Genome-->
<div  id="app5" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/galaxygenome.png" alt="applogo" width="200px" height="200px">
</center>
<h3>Galaxy Genome</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>Humanity is facing the threat of being totally destroyed.
May it be aliens? Or political elites struggling for power? Explore Galaxy Genoome to be the savior of humanity</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $1.99</a>
</center>
</fieldset>
</div>

<!--Candy Crush Soda Saga-->
<div  id="app6" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/candycrush.jpg" alt="applogo" width="180px" height="180px">
</center>
<h3>Candy Crush Soda Saga</h3>
<div class="description">
<h4>Description</h4>
<p>For the pros of the almost unknown Candy Crush Saga here comes Candy Crush Soda Saga! Enjoy the advanced user interface, 
and challenging game levels.</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Free App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginDownload.php" class="getapp">Download</a>
</center>
</fieldset>
</div>

<!--Machinarium-->
<div  id="app7" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/machinarium.png" alt="applogo" width="180px" height="180px">
</center>
<h3>Machinarium</h3>
<div class="description">
<h4>Description</h4>
<p>Machinarium is the bindblowing adventure game that has being developed.
Help Josef the robot to save his girlfriend Berta kidnapped by the Black Cap Brotherhood gang.</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $4.99</a>
</center>
</fieldset>
</div>


<!--Live or Die-->
<div  id="app8" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/liveordie.jfif" alt="applogo" width="190px" height="190px">
</center>
<h3>Live or Die</h3><br>
<div class="description">
<h4>Description</h4>
<p>Live or die: zombie Survival is an all new survivor game designed.
Survive and explore the open world, build and upgrade your home, build a motorcycle and many more</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $0.99</a>
</center>
</fieldset>
</div>


<!--LUDO CLUB-->
<div  id="app9" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/ludo.png" alt="applogo" width="150px" height="150px">
</center>
<h3>LUDO CLUB</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>Play the best board game ever, LUDO CLUB allows you to connect with your friends too. Enter the mulitcolored world of LUDO CLUB
and have the best experience of a board game</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Free App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginDownload.php" class="getapp">Download</a>
</center>
</fieldset>
</div>


<!--Teslagrad-->
<div  id="app10" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/teslagrad.jpg" alt="applogo" width="160px" height="160px">
</center>
<h3>Teslagrad</h3><br>
<div class="description">
<h4>Description</h4>
<p>The king of Elektropia rules the kingdom while combatting with wizards who have a massive tower in the middle of the city named Teslagrad.
You have to discover the secrets kept in the long abandoned Tesla Tower. </p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $6.99</a>
</center>
</fieldset>
</div>

<!--Peppa Pig: Golden Boots-->
<div  id="app11" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/peppapig.jfif" alt="applogo" width="180px" height="160px">
</center>
<h3>Peppa Pig: Golden Boots</h3><br>
<div class="description">
<h4>Description</h4>
<p>Fans of Pepa pig this call is to you-the game features the short episode "golden boots"  
This game is specially designed for preschoolers to explore the much loved characters, music and sound effects.</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $2.99</a>
</center>
</fieldset>
</div>

<!--Asphalt 9: Legends-->
<div  id="app12" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/asphalt.png" alt="applogo" width="150px" height="130px">
</center>
<h3>Asphalt 9: Legends</h3>
<div class="description">
<h4>Description</h4>
<p>Experience the sdrenaline rush with Asphalt 9: Legends, the game incoporates the wheels of real internationally baranded companies.
Enjoy the real experience of performing stunts in real locations with all new car features.</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Free App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginDownload.php" class="getapp">Download</a>
</center>
</fieldset>
</div>
</div>




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
</center>
</body>
</html>
