<?php
session_start();

//Function for viewing login name
function loginname(){
	if(empty($_SESSION["Username"])){
		echo "";
	}
	else{
		echo " ".$_SESSION["Username"];
	}
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
	<!--Greeting to user, displays name if they're logged in-->
      <h1>Hello<?php loginname(); ?>! Welcome to TeenReads!</h1>
	  <br>
	  <img class="mygif" src="https://media2.giphy.com/media/xiE902jeKqe4libpvF/giphy.gif?cid=ecf05e47arumif1si61nt5k3htbefle6zpzdl61ysanyzwoa&rid=giphy.gif&ct=g" alt="bookopen">
      <h2>The go-to site for teen literature.</h2>
	  <br>
	  <br>
	</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>A haven for enjoyers of fiction</h3>
      <p>My name is Simeon, and I've always enjoyed reading the Hunger Games. </p>
      <p>I wanted to create a hub where teens and adults alike can look up books from their favorite series, and buy them if they're interested!</p>
    </div>
    <div class="col-sm-4">
      <h3>Stay up-to-date on teen literature</h3>
	  <p>You can view any of the books on a series that are currently available.</p>
      <p>Simply click a category, choose a book you're curious about buying, and you'll be sent to its Amazon page!</p>
    </div>
    <div class="col-sm-4">
      <h3>Multiple titles to choose from</h3>        
      <p>There are plenty of works to choose from, such as Harry Potter, The Hunger Games, and more!</p>
      <p>You can request more categories of books to be added to the site through contact!</p>
    </div>

  </div>
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
