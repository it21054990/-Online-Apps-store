<?php
 require "config.php";
 
 session_start();
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Education</title>
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
 <a href="#">Education</a>
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
</video><br><br>
</center>
<h1 id="heading">Education</h1>
<button style=" margin: 0px 0px 0px 80px;" class="paidFreebtn" type="button" id="freeapps" onclick="displayFreeApps('freeapps'); displayAllAppsfree();">Free Apps</button>
<button class="paidFreebtn" type="button" id="paidapps" onclick="displayPaidApps('paidapps'); displayAllAppspaid();">Paid Apps</button><br><br>

<div id="filter">
<h1 id = "demo"></h1>
<!--LinkedIn Learning-->
<center>
<div  id="app1" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/linkedinLearning.png" alt="applogo" width="200px" height="180px"><br><br><br>
</center>
<h3>LinkedIn Learning</h3>
<div class="description">
<h4>Description</h4>
<p>One of the newer learning apps available,there is an ample of courses for things like office skills, creative skills, and other similar things.
The app also comes with Chromecast support, offline support, playlists, and more.</p>
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


<!--Khan Academy-->
<div  id="app2" class="appdiv">
<fieldset class="app">
<center>
<img src="images/khanacademy.png" alt="applogo" width="170px" height="180px">
</center>
<h3>Khan Academy</h3>
<div class="description">
<h4>Description</h4>
<p>Khan Academy is an education app for everyone, may you be a parent helping your first grader with geometry or a postgraduate looking for a deep dive into any interested topic. 
No matter how basic or advanced your topic is chances are Khan Academy definetly has a video lesson for it.</p>
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

<!--kahoot-->
<div  id="app3" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/kahoot.jpg" alt="applogo" width="170px" height="160px">
</center>
<h3>Kahoot</h3>
<div class="description"><br>
<h4>Description</h4>
<p>Kahoot is an app that allows to create interactive quizes in matter of minutes, make meetings, lectures, webinars more interactive by starting off with
a kahoot quiz.Kahoot! app is now available in English, Spanish, French, German, Italian and many more</p>
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

<!--SoloLearn-->
<div  id="app4" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/sololearn.png" alt="applogo" width="160px" height="150px">
</center>
<h3>SoloLearn Premium</h3>
<div class="description">
<h4>Description</h4>
<p>SoloLearn is a bunch of apps all in one. The app is built for developers of programming languages. 
The app supports web languages like HTML, more common languages like Java or C++, and even some more specialized languages like Python. 
For every language there is a different app</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $6.99</a>
</center>
</fieldset>
</div>

<!--Moon+Reader Pro-->
<div  id="app5" class="appdiv">
<fieldset class="app">
<center><br><br>
<img src="images/moonreaderpro.png" alt="applogo" width="150px" height="150px">
</center>
<h3>Moon + Reader Pro</h3>
<div class="description">
<h4>Description</h4>
<p>Tha app provides all in one documents manager and provides an enhanced experience in reading books with all new features en-coporated
Supports EPUB, PDF, DOCX, ODT, RTF, TXT, HTML,WEBP, RAR, ZIP, OPDS and many more formats.</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $6.99</a>
</center>
</fieldset>
</div>

<!--Edmodo-->
<div  id="app6" class="appdiv">
<fieldset class="app">
<center><br><br>
<img src="images/edmodo.png" alt="applogo" width="200px" height="200px">
</center>
<h3>Edmodo</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>Edmodo app can be used by teachers to share and engage their students in interactive lessons and also keep the parents updated on their kid's
education. It is a free app that allow vibrant class-room activity</p>
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

<!--WolframAlpha-->
<div  id="app7" class="appdiv">
<fieldset class="app">
<center>
<img src="images/wolframalpha.png" alt="applogo" width="150px" height="150px">
</center>
<h3>Wolfram Alpha</h3>
<div class="description">
<h4>Description</h4>
<p>WolframAlpha is an app for serious scholars. It includes information from like around a ton of topics for example
various types of mathematics, statistics, data analysis, physics, chemistry, engineering, astronomy, units of measurement, weather, geography, 
and plenty more.</p>
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

<!--Memorize-->
<div  id="app8" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/french.png" alt="applogo" width="180px" height="180px"><br><br>
</center>
<h3>Memorize:Learn French with flash cards</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>As the name of the app implies it teaches the french language using flash cards. 
It is an AI-based study App for learning and memorizing French vocabulary.</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $4.99</a>
</center>
</fieldset>
</div>


<!--Udemy-->
<div  id="app9" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/udemy.png" alt="applogo" width="180px" height="180px">
</center>
<h3>Udemy</h3>
<div class="description">
<h4>Description</h4>
<p>A learning that provides a more versatile exerperience as it gives the chance to learn general skills such as cooking and public speaking.
There is a vareity of a courses for free.It has courses on things like Adobe apps, Microsoft apps</p>
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

<!--My first words-->
<div  id="app10" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/firstwords.png" alt="applogo" width="200px" height="200px">
</center><br>
<h3>My first Words</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>Prepare your litte one for preschool using "My first words", the app provides interactive interface to engage your toddler and to prepare them to have
best experience at preschool</p>
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

<!--Language Therapy: Aphasia-->
<div  id="app11" class="appdiv">
<fieldset class="app">
<center><br><br>
<img src="images/therapy.png" alt="applogo" width="140px" height="140px">
</center>
<h3>Language Therapy: Aphasia</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>This app helps tremendously in reading, writing, listening, and speaking skills. 
Whether you’re recovering from a stroke or brain injury, Language Therapy can help.
</p>
</div>
<img src="images/5 stars.jpg" alt="apprating" width="150px" height="60px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $74.99</a>
</center>
</fieldset>
</div>

<!--Photomath-->
<div  id="app12" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/photomath.png" alt="applogo" width="170px" height="170px">
</center>
<h3>Photomath</h3>
<div class="description">
<h4>Description</h4>
<p>As the name of the app implies the app provides more of a focused type of learning that revovles around math. The app allowers its users to capture
math problem from book, screen, regardless whether the it is handwritten or typed and provides fully detialed solutions.</p>
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
