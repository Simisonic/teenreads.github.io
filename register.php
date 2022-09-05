<?php 

session_start();
if(isset($_POST['submit'])){
	$first = isset($_POST['first']) ? $_POST['first'] : '';
	$last = isset($_POST['last']) ? $_POST['last'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	$passwordcon = isset($_POST['passwordcon']) ? $_POST['passwordcon'] : '';
	

	if (strlen($first)>0 && strlen($last)>0 && strlen($email)>0 && strlen($username)>0 && strlen($password)>7 && $password===$passwordcon && filter_var($email, FILTER_VALIDATE_EMAIL)){ 
		
		$_SESSION['first']=$first;
		$_SESSION['last']=$last;
		$_SESSION['email']=$email;
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$handle=fopen("register.txt", "a") or die ("Unable to open the file.");
		echo <<<EOF
    <script>
    alert("You've successfully registered your information!");
    </script>
EOF;
		fwrite($handle, "User Data:"."\n".$_SESSION['first']."\n");
		fwrite($handle, $_SESSION['last']."\n");
		fwrite($handle, $_SESSION['email']."\n");
		fwrite($handle, $_SESSION['username']."\n");
		fwrite($handle, $_SESSION['password']."\n\n");
		fclose($handle);
		
	}else{
		$msg="<span style='color:red'>Invalid Login. Please ensure that the fields are not empty and that the password is 8 characters or more.</span>";
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
      <h1>Registration</h1>
      <div class="mainbody">
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Register</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top"><strong>First Name:</strong></td>
      <td><input name="first" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right"><strong>Last Name:</strong></td>
      <td><input name="last" type="text" class="Input"></td>
    </tr>
	<tr>
      <td align="right"><strong>Email:</strong></td>
      <td><input name="email" type="text" class="Input"></td>
    </tr>
	<tr>
      <td align="right"><strong>Preferred Username:</strong></td>
      <td><input name="username" type="text" class="Input"></td>
    </tr>
	<tr>
      <td align="right"><strong>Password:</strong></td>
      <td><input name="password" type="password" class="Input"></td>
    </tr>
	<tr>
      <td align="right"><strong>Password Confirmation:</strong></td>
      <td><input name="passwordcon" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="submit" type="submit" value="Register" class="Button3"></td>
    </tr>
  </table>
  
</form>
<br>
	  <a href="login.php" style="margin-left:300px"><u>Already have an account? Log in here!</u></a>
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