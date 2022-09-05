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
      <h1>Harry Potter</h1>
	  <br><br>
      <div class="mainbody">
        <img class="mygif" src="https://media.giphy.com/media/26BRzozg4TCBXv6QU/giphy.gif" alt="code-img">
		<br><br>
		<h2>A famous series of fantasy novels by J. K. Rowling about the chronicles of a young wizard named Harry, a student of the Hogwarts School of Witchcraft!</h2>
		<hr class="thick">
		
<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/91ocU8970hL.jpg" alt="sorcerer-img">
        <h3>Harry Potter and the Sorcerer's Stone</h3>
        <p>The first book in the series to start with! Now going for <strong>$39.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Harry-Potter-Sorcerers-Stone-Illustrated/dp/0545790352/ref=sr_1_4?crid=1YNHHM9KPF8F0&keywords=sorcerer%27s+stone+book&qid=1648224661&sprefix=sorcerer%27s+stone+book%2Caps%2C124&sr=8-4">BUY NOW</a>
      </div>
	  
	<div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/51-gJbWc3qL._SX338_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>Harry Potter and the Chamber of Secrets</h3>
        <p>The second book in the series! Now going for <strong>$37.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Potter-Chamber-Secrets-MinaLima-Illustrated/dp/1338716530/ref=sr_1_2?crid=2JRHO5WIG5O6E&keywords=harry+potter+book+2&qid=1648224932&sprefix=harry+potter+book%2Caps%2C133&sr=8-2">BUY NOW</a>
      </div>
	  </div>
		</div>
			  <br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <img class="myimg" src=https://images-na.ssl-images-amazon.com/images/I/51-rbiAIiRL._SX341_BO1,204,203,200_.jpg alt="sorcerer-img">
        <h3>Harry Potter and the Prisoner of Azkaban</h3>
        <p>The third book in the series! The movie for this one is my personal favorite. Now going for <strong>$26.99.</strong></p>
		<a class="btn" href=https://www.amazon.com/Harry-Potter-Prisoner-Azkaban-Rowling/dp/0439136350/ref=sr_1_1?keywords=harry+potter+book+3+hardcover&qid=1648405165&sprefix=harry+potter+book+3+hardco%2Caps%2C180&sr=8-1>BUY NOW</a>
      </div>

	<div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/61Me3ePpM9L._SX421_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>Harry Potter and the Goblet of Fire</h3>
        <p>The fourth book in the series! Now going for <strong>$47.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Harry-Potter-Goblet-Fire-Illustrated/dp/0545791421/ref=sr_1_1?crid=2Z2JZKT43FTGK&keywords=harry+potter+book+4+hardcover&qid=1648405302&sprefix=harry+potter+book+hardcover%2Caps%2C181&sr=8-1">BUY NOW</a>
      </div>
	  </div>
		</div>
			  <br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/515ty5JeyqL._SX422_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>Harry Potter and the Order of the Phoenix</h3>
        <p>The fifth book in the series! Now going for <strong>$54.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Harry-Potter-Order-Phoenix-Illustrated/dp/054579143X/ref=sr_1_1?crid=26171PPMRG435&keywords=harry+potter+book+5+hardcover&qid=1648405388&sprefix=harry+potter+book+hardcover%2Caps%2C169&sr=8-1">BUY NOW</a>
      </div>

	<div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/51uO1pQc5oL._SX329_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>Harry Potter and the Half-Blood Prince</h3>
        <p>The sixth book in the series! Now going for <strong>$29.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Harry-Potter-Half-Blood-Prince-Book/dp/0439784549/ref=sr_1_1?crid=1WAL6J0VJPZ6Y&keywords=harry+potter+book+6+hardcover&qid=1648405498&sprefix=harry+potter+book+hardcover%2Caps%2C125&sr=8-1">BUY NOW</a>
      </div>
	  </div>
		</div>
		<br><br><br><br>
	  <div class="container">
  <div class="row">
    <div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/51E7NvVLO9L._SX346_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>Harry Potter and the Deathly Hallows</h3>
        <p>The seventh and final book in the series! Now going for <strong>$34.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Harry-Potter-Deathly-Hallows-Book/dp/0545010225/ref=sr_1_1?crid=3MCVILCTB0DYL&keywords=harry+potter+book+7+hardcover&qid=1648405593&sprefix=harry+potter+book+hardcover%2Caps%2C118&sr=8-1">BUY NOW</a>
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

<!--
Use this to check if user is logged in:
http://desarrolloweb.dlsi.ua.es/cursos/2012/web-programming-with-php/checking-if-user-is-logged
-->