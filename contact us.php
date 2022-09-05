<?php 
session_start();
//Everything is stored in a function for later use, variables initialized.
function contactform(){
	if($_POST) {
		$visitor_name = "";
		$visitor_email = "";
		$email_title = "";
		$visitor_message = "";
		$email_body = "<div>";
		  
		//FILTER_SANITIE_STRING removes tags and removes or encodes special characters from a string.
		//Form will also check if fields are empty.
		if(isset($_POST['visitor_name'])) {
			$visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
			$email_body .= "<div>
							   <label><b>Thank you for sending your feedback! Your message is being processed. Here is your message:<br><br>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
							</div>";
		}
	 //Validates email to ensure it is in the right format.
		if(isset($_POST['visitor_email'])) {
			$visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
			$visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
			$email_body .= "<div>
							   <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
							</div>";
		}
		  
		if(isset($_POST['email_title'])) {
			$email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
			$email_body .= "<div>
							   <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_title."</span>
							</div>";
		}
//HTML characters are removed from the visitor's message so it is ready for printing.
		  
		if(isset($_POST['visitor_message'])) {
			$visitor_message = htmlspecialchars($_POST['visitor_message']);
			$email_body .= "<div>
							   <label><b>Visitor Message:</b></label>
							   <div>".$visitor_message."</div>
							</div>";
		}
		$email_body .= "</div>";
		//Finally, $email_body is echoed after entered data has been added to it.
		if(isset($_POST['visitor_name']) && isset($_POST['visitor_email']) && isset($_POST['email_title']) && isset($_POST['visitor_message'])){
			echo $email_body;	
		}
		else{
			echo "";
		}
		
		
	}
}
//Unix is needed to send an actual email
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

div.elem-group {
  margin: 40px 0;
}

label {
  display: block;
  font-family: 'Aleo';
  padding-bottom: 4px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Aleo';
  width: 500px;
  padding: 8px;
}

textarea {
  height: 250px;
}

button {
  height: 50px;
  background: green;
  color: white;
  border: 2px solid darkgreen;
  font-size: 1.25em;
  font-family: 'Aleo';
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;
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
      <h1>Contact Me</h1>
      <div class="mainbody">
        <h2 style="color:#11337B"><strong>Information on TeenReads Business:</strong><br><br><strong>Street:</strong>  Oneness Plaza<br>
<strong>City:</strong>   Montego Bay<br>

<strong>State/province/area:</strong>    Montego Bay<br>

<strong>Phone number:</strong>  (876) 952-6753<br>

<strong>Country calling code:</strong>  +1-876<br>

<strong>Country:</strong>  Jamaica</h2>
		<hr class="thick">
		<h2>Have any feedback? Submit it in this contact form below:</h2>
<form action="contact us.php" method="post">
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
  </div>
  <div class="elem-group">
    <label for="title">Reason For Contacting</label>
    <input type="text" id="title" name="email_title" required placeholder="Example: New book series" pattern=[A-Za-z0-9\s]{8,60}>
  </div>
  <div class="elem-group">
    <label for="message">Write your message</label>
    <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
  </div>
  <button type="submit">Send Message</button>
</form>
	  
	  <h2><br><?php contactform();?></h2>
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

