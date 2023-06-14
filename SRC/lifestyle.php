<?php
 require "config.php";
 
 session_start();
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Lifestyle</title>
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

<img src="images/appnet logo.png" width="85px" height="80px" align="left">
<h1>AppNet</h1><br><br>
<ul>
<li><a href="Home.php">Home</a></li>
<li class="dropdown"><a href="#" class="dropbtn">Categories</a>
<div class="dropcontent">
 <a href="music.php">Music</a>
 <a href="education.php">Education</a>
 <a href="finance.php">Finance</a>
 <a href="games.php">Games</a>
 <a href="#">Lifestyle</a>
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
<h1 id="heading">Lifestyle</h1>
<button style=" margin: 0px 0px 0px 80px;"class="paidFreebtn" type="button" id="freeapps" onclick="displayFreeApps('freeapps'); displayAllAppsfree();">Free Apps</button>
<button class="paidFreebtn" type="button" id="paidapps" onclick="displayPaidApps('paidapps'); displayAllAppspaid();">Paid Apps</button><br><br>

<div id="filter">
<h1 id = "demo"></h1>
<!--Pinterest-->
<center>
<div  id="app1" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/pinterest.png" alt="applogo" width="180px" height="180px">
</center>
<h3>Pinterest</h3>
<div class="description">
<h4>Description</h4>
<p>Pinterest is the app to find your inspiration, discover ne ideas, save what inspires you and shop to make them yours. Pinterest adds so mush value to
your lifestye, explore it!</p>
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

<!--Instagram-->
<div  id="app2" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/insta.png" alt="applogo" width="150px" height="150px">
</center>
<h3>Instagram</h3><br>
<div class="description">
<h4>Description</h4>
<p>Instaragam helps to connect with friends, family and absolutely with anyone on instagram. Share posts on crafts, talents, interets, basically
any kind of mulitimedia. Get to know news and circulate ideas for an active lifestyle</p>
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

<!--Amazon Alexa-->
<div  id="app3" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/alexa.png" alt="applogo" width="140px" height="140px">
</center>
<h3>Amazon Alexa</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>Get Amazon Alexa to connect with all your alexa devices. Listen to music, make shopping lists, get news updates and much more.
The more you use Alexa, the more she adapts to your voice, vocabulary, and personal preferences.</p>
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

<!--White Noise Pro-->
<div  id="app4" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/whitenoise.png" alt="applogo" width="190px" height="190px">
</center>
<h3>White Noise Pro</h3>
<div class="description">
<h4>Description</h4>
<p>Sleep is vital for human health and White Noise pro ensures a just that every day. 
Provides you with sounds of the environment to help you relax during the day and sleep great at night
</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $2.99</a>
</center>
</fieldset>
</div>

<!--buddhify-->
<div  id="app5" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/budhify.png" alt="applogo" width="180px" height="160px">
</center>
<h3>Buddhify</h3>
<div class="description">
<h4>Description</h4>
<p>Buddhify helps to add in calmness, clarity and kindness to all parts of your life. Budhify includes 200+ kinds of medidations with instructions
to reduce anxiety and stress. Also includes stress relieving exercises, follow guided methods to help you live happier and healthier.
</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $3.99</a>
</center>
</fieldset>
</div>

<!--Wedding Planner-->
<div  id="app6" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/wedding.png" alt="applogo" width="180px" height="180px">
</center>
<h3>Wedding Planner</h3>
<div class="description">
<h4>Description</h4>
<p>Wedding Planner app provides a smooth environment to plan out your wedding by keeping track of all the needed infromation.
Important tasks, control expenses and manage vendors. Sync all data across devices</p>
</div>
<img src="images/5 stars.jpg" alt="apprating" width="150px" height="60px">
<h4 id="apptype">Free App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginDownload.php" class="getapp">Download</a>
</center>
</fieldset>
</div>

<!--Weather Liveº-->
<div  id="app7" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/weather.png" alt="applogo" width="150px" height="150px">
</center>
<h3>Weather Live</h3>
<div class="description">
<h4>Description</h4>
<p>Climate changes would not be a surprise any longer with Weather Live. Live wallpapers can be set to show the weather changes yet to come.
 Know the weathermforecast in your city and multiple locations all around the world.</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $5.99</a>
</center>
</fieldset>
</div>


<!--Oh She Glows-->
<div  id="app8" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/ohsheglows.jfif" alt="applogo" width="140px" height="130px">
</center>
<h3>Oh She Glows</h3>
<div class="description">
<h4>Description</h4>
<p>Oh She Glows is a recipe app that includes plant based recipies from the famous award-winning recipe blog OhSheGlows.com and brought to you by
New York Times bestselling author Angela Liddon. Each recipe is followed by a stunning illustration of the food.</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $2.49</a>
</center>
</fieldset>
</div>


<!--eBay-->
<div  id="app9" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/eBay.png" alt="applogo" width="180px" height="180px">
</center>
<h3>eBay</h3>
<div class="description">
<h4>Description</h4>
<p>One of the best places to buy and sell goods of many different kinds. Discover deals — from rare sneakers and vintage watches, 
to luxury handbags, high-tech laptops, and trending trading cards.</p>
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


<!--Simple Calendar Pro-->
<div  id="app10" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/calendar.png" alt="applogo" width="180px" height="180px">
</center>
<h3>Simple Calendar Pro</h3>
<div class="description">
<h4>Description</h4>
<p>Simple Calendar is a highly customizable offline calendar that can be bought. The app doesnt have 
unnecessary permissions or ads!. Build your own custom schedule and lead everyday following an efficient agenda.</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $1.09</a>
</center>
</fieldset>
</div>

<!--Easy Voice Recorder Pro-->
<div  id="app11" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/recorder.png" alt="applogo" width="160px" height="150px">
</center>
<h3>Easy Voice Recorder Pro</h3>
<div class="description">
<h4>Description</h4>
<p>Record important occasions eg: business meetings, songs, personal notes and many more without the disturbance from ads.
Beneficial for bussiness people, musicians, students, teachers and most other professions that need recordings of important occasions.</p>
</div>
<img src="images/5 stars.jpg" alt="apprating" width="150px" height="60px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $3.99</a>
</center>
</fieldset>
</div>

<!--Imou Life-->
<div  id="app12" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/imoulife.png" alt="applogo" width="180px" height="160px">
</center>
<h3>Imou Life</h3>
<div class="description">
<h4>Description</h4>
<p>Imou life is specially created for Imou cameras, doorbells, detectors, NVR and other smart IoT products.
 The app allows to watch live view or recorded playback from anywhere.</p>
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
