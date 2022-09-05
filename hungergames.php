<?php 
session_start();
if(!isset($_SESSION['Username']) || !isset($_SESSION['Password'])){
//Restricts access to the page if they aren't logged in.
//Alerts the user before sending them back to the previous page. 
//Javascript is used to create the alert by using the EOF to display information.
    echo <<<EOF
    <script>
    alert("Sorry, you must be logged in to view this.");
    window.history.back();
    </script>
EOF;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

hr.thick {
  border: 10px solid #66BFBF;
  border-radius: 5px;
  width: 90%;
  margin:50;
}
.mygif{
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.myimg {
  width: 40%;
  float: right;
  margin-left: 30px;
}
h2{
	  width: 50%;
	  margin: 100px auto 100px auto;
}

</style>
  
</head>
<body>
<nav class="navbar navbar-dark bg-success">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">TeenReads
  </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="contact us.php">Contact Me</a></li>
      <li><a href="harrypotter.php">Harry Potter</a></li>
	  <li><a href="hungergames.php">Hunger Games</a></li>
	  <li><a href="percyjackson.php">Percy Jackson</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>
  </div>
</nav>

<div class="graphic-container">
    <img class="top-cloud" src="images/cloud.png" alt="cloud">
    <div class="title-text">
      <h1>The Hunger Games</h1>
	  <br><br>
      <div class="mainbody">
        <img class="mygif" src="https://media2.giphy.com/media/edLKLYMlNFPJC/giphy.gif?cid=ecf05e47sif3uuhh4eb0uk5b6b9m70duz5e1dn867zqy53gw&rid=giphy.gif&ct=g" alt="code-img">
		<br><br>
		<h2>A story set in the future remnents of the USA written by Suzanne Collins. It takes place in a nation called Panem, where 24 tributes from twelve districts fight to the death in a competition known as 'The Hunger Games.'</h2>
		<hr class="thick">
		
<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/41V56ye3PrL._SY291_BO1,204,203,200_QL40_FMwebp_.jpg" alt="sorcerer-img">
        <h3>The Hunger Games</h3>
        <p>The first book in the series! I remember watching this in theaters as a kid, and how thrilling it was. Now going for <strong>$18.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Hunger-Games-Book/dp/0439023483/ref=sr_1_1?crid=1SMFN75ITCNWC&keywords=hunger+games+book+1+hardcover&qid=1648406031&sprefix=hunger+games+book+1+hardcover%2Caps%2C121&sr=8-1">BUY NOW</a>
      </div>
	  
	<div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/41PtN1LzI+L._SX346_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>Catching Fire</h3>
        <p>The second book in the series! My personal favorite of the movies, where a second Hunger Games takes place. Now going for <strong>$18.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Potter-Chamber-Secrets-MinaLima-Illustrated/dp/1338716530/ref=sr_1_2?crid=2JRHO5WIG5O6E&keywords=harry+potter+book+2&qid=1648224932&sprefix=harry+potter+book%2Caps%2C133&sr=8-2">BUY NOW</a>
      </div>
	  </div>
		</div>
			  <br><br><br><br>
		<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/413KDccNayL._SX328_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>Mockingjay</h3>
        <p>The third and final book in the series!  Now going for <strong>$18.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Mockingjay-Hunger-Games-Suzanne-Collins/dp/0439023513/ref=sr_1_2?crid=F3Z25NEC70XD&keywords=hunger+games+book+3+hardcover&qid=1648406282&sprefix=hunger+games+book+hardcover%2Caps%2C129&sr=8-2">BUY NOW</a>
      </div>
	  
	<div class="col-sm-4">
        <img class="myimg" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f1/The_Ballad_of_Songbirds_and_Snakes_%28Suzanne_Collins%29.png/220px-The_Ballad_of_Songbirds_and_Snakes_%28Suzanne_Collins%29.png" alt="sorcerer-img">
        <h3>The Ballad of Songbirds and Snakes</h3>
        <p>A prequel to the story of the Hunger Games, starring an 18-year-old President Snow who is preparing to mentor in the Games. Now going for <strong>$27.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Ballad-Songbirds-Snakes-Hunger-Games/dp/1338635174/ref=sr_1_1?crid=1IMDZQWB73LB5&keywords=hunger+games+book+4+hardcover&qid=1648406340&sprefix=hunger+games+book+hardcover%2Caps%2C132&sr=8-1">BUY NOW</a>
      </div>
	  </div>
		</div>

	  
    </div>
<hr>
  <img class="mountain" src="images/mountain.png" alt="mountain-img">
</div>
<div class="bottom-container">
  <a class="footer-link" href="#">LinkedIn</a>
  <a class="footer-link" href="#">Twitter</a>
  <a class="footer-link" href="#">Website</a>
  <p class="copyright">© 2022 Simeon Clarke @ TeenReads.</p>
</div>
</div>
</body>
</html>