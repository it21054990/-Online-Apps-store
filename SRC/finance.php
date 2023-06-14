<?php
 require "config.php";
 
 session_start();
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Finance</title>
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
 <a href="#">Finance</a>
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
<h1 id="heading">Finance</h1>
<button style=" margin: 0px 0px 0px 80px;"class="paidFreebtn" type="button" id="freeapps" onclick="displayFreeApps('freeapps'); displayAllAppsfree();">Free Apps</button>
<button class="paidFreebtn" type="button" id="paidapps" onclick="displayPaidApps('paidapps'); displayAllAppspaid();">Paid Apps</button><br><br>

<div id="filter">
<h1 id = "demo"></h1>
<!--iqOption-->
<center>
<div  id="app1" class="appdiv">
<fieldset class="app">
<center>
<img src="images/iqOption.png" alt="applogo" width="180px" height="180px">
</center>
<h3>IQ Option</h3>
<div class="description">
<h4>Description</h4>
<p>IQ Option is a mind-blowing trading mobile platform. The app provides its customers more than 500 assets. 
With IQ Option, shares of Tesla, Netflix, Spotify, Alibaba, Microsoft, Disney, oil, gold and many more assets can be traded on the same platform.</p>
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

<!--PayPal-->
<div  id="app2" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/paypal.png" alt="applogo" width="150px" height="150px">
</center>
<h3>PayPal</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>PayPal is an app that facilates money transactions over the internet. It supports useful transactions such as money transfers between another person
with a PayPal account. Currencies can be choosen to send money around the world and more.</p>
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

<!--People's Pay-->
<div  id="app3" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/peoplespay.png" alt="applogo" width="180px" height="180px">
</center>
<h3>People's Pay</h3>
<div class="description">
<h4>Description</h4>
<p>People's Pay is an app introduced by the People's bank that has incoporated specifications to ensure to carry out transactions smoothly. The app ensures
your account privacy and allows secure transactions</p>
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

<!--My Budget Book-->
<div  id="app4" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/mybudgetbook.png" alt="applogo" width="200px" height="200px">
</center>
<h3>My Budget Book</h3>
<div class="description">
<h4>Description</h4>
<p>My Bugdet Book helps you to keep a close track of all your expenses and income therefore helps to manage money better.
You can also see results of your income and expenses in different charts that helps to visualize better</p>
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

<!--Home Budget with Sync-->
<div  id="app5" class="appdiv">
<fieldset class="app">
<center><br><br>
<img src="images/homebudget.png" alt="applogo" width="220px" height="220px"><br>
</center>
<h3>Home Budget with Sync</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>The app is now available in ios, andriod devices and even present as desktop versions for windows and Mac OS and includes instant data sync in both
mobiles and desktops</p>
</div>
<img src="images/4 stars.jpg" alt="apprating" width="140px" height="40px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $5.99</a>
</center>
</fieldset>
</div>

<!--Payoneer -->
<div  id="app6" class="appdiv">
<fieldset class="app">
<center><br><br>
<img src="images/payoneer.png" alt="applogo" width="160px" height="200px">
</center>
<h3>Payoneer </h3><br><br><br>
<div class="description">
<h4>Description</h4>
<p>Payoneer is built for professionals in business to make their business payments simpler. The app is a leading cross-border payments platform for business.
</p>
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

<!--Money Manager (+PC Editing)-->
<div  id="app7" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/moneymanager.png" alt="applogo" width="130px" height="130px">
</center>
<h3>Money Manager<br>(+PC Editing)</h3><br>
<div class="description">
<h4>Description</h4>
<p>Money manager app in general is the number 1 app to manage personal assets.
The enhanced version that incoporates pc editing includes the facility to see fluctuations in your accounts indicated on graphs on your PC.</p>
</div>
<img src="images/5 stars.jpg" alt="apprating" width="150px" height="60px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $4.99</a>
</center>
</fieldset>
</div>


<!--Stoxy PRO-->
<div  id="app8" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/pro.png" alt="applogo" width="140px" height="140px">
</center>
<h3>Stoxy PRO</h3>
<div class="description">
<h4>Description</h4>
<p>Stoxy pro is the best app to keep tracks of stocks and making sure to remain on top of global financial markets.
The app offers financial informational tools like stocks portfolio, watchlist, widgets, breaking news, alerts, economic calendar and more.</p>
</div>
<img src="images/5 stars.jpg" alt="apprating" width="150px" height="60px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $7.49</a>
</center>
</fieldset>
</div>


<!--Easypaisa-->
<div  id="app9" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/easypasia.png" alt="applogo" width="180px" height="180px">
</center>
<h3>Easypaisa</h3><br><br>
<div class="description">
<h4>Description</h4>
<p>With Easypaisa go cashless anywhere and use it to pay for all the day to day expenses online including utility payments, prepaid mobile bills.
App allows money transfers easily from anywhere anytime</p>
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


<!--Monefy Pro -->
<div  id="app10" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/monfey.png" alt="applogo" width="150px" height="150px">
</center>
<h3>Monefy Pro </h3>
<div class="description">
<h4>Description</h4>
<p>Watch out for every cent you spend using Monfey Pro.You only need to enter new records every time you make a purchase
Tracking daily purchases, bills, and everything else you spend money on has never been so quick</p>
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

<!--AndroMoney Pro-->
<div  id="app11" class="appdiv">
<fieldset class="app">
<center><br>
<img src="images/andromoneypro.png" alt="applogo" width="180px" height="160px">
</center>
<h3>AndroMoney Pro</h3><br>
<div class="description">
<h4>Description</h4>
<p>One of the best tools you can to choose to keep track of your financial records. This is the add free version of the free app which would provide a
better experience</p>
</div>
<img src="images/4.5 stars.jpg" alt="apprating" width="180px" height="80px">
<h4 id="apptype">Paid App</h4>
<a href="RateReview.php" class="buttons">User Reviews</a>
<a href="RateReview.php" class="buttons">Rate App</a><br><br>
<center>
<a href="checkloginBuy.php" class="getapp">Buy app $3.99</a>
</center>
</fieldset>
</div>

<!--Skrill-->
<div  id="app12" class="appdiv">
<fieldset class="app">
<center><br><br>
<img src="images/skrill.png" alt="applogo" width="180px" height="160px">
</center>
<h3>Skrill</h3>
<div class="description">
<h4>Description</h4>
<p>Skrill allows you to do easy money transactions online in matter of minutes. Transactions can be done with United Kingdom, 
France, and more than 180 other countries across the globe</p>
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
