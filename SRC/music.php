<?php
 require "config.php";
 
 session_start();
 


?>

<!DOCTYPE html>
<html>
<head>
<title>Music</title>
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
 <a href="#">Music</a>
 <a href="education.php">Education</a>
 <a href="finance.php">Finance</a>
 <a href="games.php">Games</a>
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
<h1 id="heading">Music</h1>
<button style=" margin: 0px 0px 0px 80px;"class="paidFreebtn" type="button" id="freeapps" onclick="displayFreeApps('freeapps'); displayAllAppsfree();">Free Apps</button>
<button class="paidFreebtn" type="button" id="paidapps" onclick="displayPaidApps('paidapps'); displayAllAppspaid();">Paid Apps</button><br><br>


<div id="filter">
<h1 id = "demo"></h1>
<!--Spoitify-->
<center>
<div  id="app1" class="appdiv">
<fieldset class="app">
<center>
<img src="images/spotify.png" alt="applogo" width="200px" height="200px">
</center>
<h3>Spotify</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>Spotify provides all basic functions, totally free and allows to view millions of songs including work from other creators around the globe</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Free App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br><br>
<center>
<a href="checkloginDownload.php" class="getapp">Download</a>
</center>
</fieldset>
</div>

<!--Jango radio-->
<div  id="app2" class="appdiv">
<fieldset class="app">
<center>
<img src="images/jango.png" alt="applogo" width="150px" height="150px">
</center>
<h3>Jango Radio</h3>
<div class="description">
<h4>Description</h4>
<p>Jango Radio is a free, personalized radio service that plays the best music by artists you love. 
Jango is specialized to play customized music for all its users, start with the name of your favourite artist and Jango will create a customized station to play similar music</p>
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

<!--Bandlab-->
<div  id="app3" class="appdiv">
<fieldset class="app">
<center>
<img src="images/bandlab.png" alt="applogo" width="130px" height="130px">
</center>
<h3>BandLab</h3><br><br><br>
<div class="description">
<h4>Description</h4>
<p>BandLab is heaps than just a music maker or song recorder 
Discover millions of tracks made by artists and DJs, form personalized playlists and even watch live streams of music performances from top creators. 
BandLab is 100% FREE to use.</p>
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

<!--Tidal-->
<div  id="app4" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/tidal.jpg" alt="applogo" width="180px" height="150px">
</center>
<h3>Tidal</h3>
<div class="description">
<h4>Description</h4>
<p>TIDAL is the only artist owned music streaming service with high fidelity sound, MQA tracks, 360 Reality Audio and Dolby Atmos support available in one place. 
Enjoy TIDAL on your favorite devices, including TVs, Amazon Alexa, and your preferred speakers.</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $9.99</a>
</center>
</fieldset>
</div>

<!--Napster-->
<div  id="app5" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/napster.png" alt="applogo" width="180px" height="160px"><br>
</center>
<h3>Napster</h3>
<div class="description">
<h4>Description</h4>
<p>With the Napster app play your music anywhere you go. Download music to listen offline.
Download unlimited playlists and songs straight to your phone or tablet and listen offline.</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $5.00</a>
</center>
</fieldset>
</div>

<!--Music Maker JAM-->
<div  id="app6" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/music maker JAM.png" alt="applogo" width="170px" height="150px">
</center>
<h3>Music Maker JAM</h3>
<div class="description">
<h4>Description</h4>
<p>Music Maker JAM is a very easy to use and free music app for DJs, beat makers, producers, and for all the other kinds of musics lovers, beginners or pros. 
Make beats and create music with our song mixer - anytime and anywhere!</p>
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

<!--qobuz-->
<div  id="app7" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/qobuz.png" alt="applogo" width="180px" height="180px">
</center>
<h3>Qobuz</h3>
<div class="description">
<h4>Description</h4>
<p>Have unlimited access to your music in High-Fidelity sound quality with Qobuz. 
Enjoy thousands of creative playlists for all occasions, allow Qobuz to discover your new taste of music</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $12.49</a>
</center>
</fieldset>
</div>


<!--Amazon Music Unlimited-->
<div  id="app8" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/amazonmusic.png" alt="applogo" width="150px" height="150px">
</center>
<h3>Amazon Music Unlimited</h3>
<div class="description">
<h4>Description</h4>
<p>With Amazon Music Unlimited, you can listen to any song, anytime, anywhere, on all your devices. 
You'll never hear or see an ad, and of course you can download songs or playlists for offline listening.</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $7.99</a>
</center>
</fieldset>
</div>


<!--YouTube Music-->
<div  id="app9" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/youtubemusic.png" alt="applogo" width="130px" height="130px">
</center>
<h3>YouTube Music</h3>
<div class="description">
<h4>Description</h4>
<p>YouTube Music is a music streaming service developed by YouTube. It offers a tailored interface for the service, focused towards music streaming, 
allowing customers to search through music videos on YouTube based on genres, playlists, and recommendations.</p>
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


<!--SiriusXM-->
<div  id="app10" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/siriusxm.png" alt="applogo" width="180px" height="180px">
</center>
<h3>SiriusXM Platinum</h3>
<div class="description">
<h4>Description</h4>
<p>The SXM App delivers the ultimate SiriusXM experience including ad-free music in addition to music live sports, original talk shows, 
exclusive comedy, news from every angle and more is also at your finger tips. </p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $8.25</a>
</center>
</fieldset>
</div>

<!--Apple Music-->
<div  id="app11" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/applemusic.png" alt="applogo" width="180px" height="160px">
</center>
<h3>Apple Music</h3>
<div class="description">
<h4>Description</h4>
<p>The Apple Music app is your one place to manage and listen to your music library.Subscribe to Apple Music, to stream thousands of songs, 
discover new music to add to your taste, Enjoy the 90-day free trial with all features</p>
</div>
<img src="images/3.5 stars.jpg" alt="apprating" width="170px" height="60px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $9.99</a>
</center>
</fieldset>
</div>

<!--BBC Sounds-->
<div  id="app12" class="appdiv">
<fieldset class="app">
<center><br><br>
<img src="images/bbcmusic.jpg" alt="applogo" width="180px" height="160px">
</center>
<h3>BBC Sounds</h3>
<div class="description">
<h4>Description</h4>
<p>The BBC Sounds app is an app you can install on your mobile or tablet to enjoy live and on-demand BBC radio, music mixes and podcasts. 
It's completely unique to you as it's designed to learn from your listening habits.</p>
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
