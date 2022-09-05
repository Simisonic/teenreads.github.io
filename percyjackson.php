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
      <h1>Percy Jackson</h1>
	  <br><br>
      <div class="mainbody">
        <img class="mygif" src="https://media2.giphy.com/media/l41K4ToNBnMtfLmSY/giphy.gif?cid=ecf05e470gh2upx065cardmtmsdnqnr4mhwdhu8f6wti8b8p&rid=giphy.gif&ct=g" alt="code-img">
		<br><br>
		<h2>A fantasy series written by Rick Riordan about a twelve-year-old boy named Percy Jackson, who comes to terms with supernatural powers bestowed to him by his demigod status.</h2>
		<hr class="thick">
		
		<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/51oFiAf8v2L._SX329_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>The Lightning Thief</h3>
        <p>The first book in the series of Percy Jackson and the Olympians! Wasn't a personal fan of the movie, but I've heard the book is great! Now going for <strong>$10.56.</strong></p>
		<a class="btn" href="https://www.amazon.com/Lightning-Thief-Graphic-Jackson-Olympians/dp/1423117107/ref=sxin_10_mbs_w_global_sims?crid=16Z0NASPBWG8A&cv_ct_cx=percy+jackson+book+1+hardcover&keywords=percy+jackson+book+1+hardcover&pd_rd_i=1423117107&pd_rd_r=99e6137f-ed09-460c-81c7-c95d101eba10&pd_rd_w=IAi50&pd_rd_wg=8r6Ic&pf_rd_p=a0190b3f-b29d-43d7-bff3-2f22febed405&pf_rd_r=0KX74JX8RR9PBRE6V0ZA&qid=1648406889&sprefix=percy+jackson+book+1+hardcover%2Caps%2C113&sr=1-6-9e7645f9-2d19-4bff-863e-f6cdbe50f990">BUY NOW</a>
      </div>
	  
	<div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/51ypJ4O9wtL._SX317_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>The Sea of Monsters</h3>
        <p>The second book in the Percy Jackson and the Olympians series! Now going for <strong>$11.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Monsters-Percy-Jackson-Olympians-Book/dp/0786856866/ref=sxin_10_mbs_w_global_sims?crid=16Z0NASPBWG8A&cv_ct_cx=percy+jackson+book+1+hardcover&keywords=percy+jackson+book+1+hardcover&pd_rd_i=0786856866&pd_rd_r=e5ab9e16-455c-4765-b7c2-99ba5229811e&pd_rd_w=HIBeB&pd_rd_wg=ktcC3&pf_rd_p=a0190b3f-b29d-43d7-bff3-2f22febed405&pf_rd_r=NHTT7C1AASDW2FZA4J3E&qid=1648407122&sprefix=percy+jackson+book+1+hardcover%2Caps%2C113&sr=1-1-9e7645f9-2d19-4bff-863e-f6cdbe50f990">BUY NOW</a>
      </div>
	  </div>
		</div>
			  <br><br><br><br>
		<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/51sZJKZpQBL._SX337_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>The  Titan's Curse</h3>
        <p>The third book in the series of Percy Jackson and the Olympians! When the goddess Artemis goes missing, Percy and his friends must find out what happened. Now going for <strong>$11.75.</strong></p>
		<a class="btn" href="https://www.amazon.com/Titans-Curse-Percy-Jackson-Olympians/dp/1423101456/ref=sxin_10_mbs_w_global_sims?crid=16Z0NASPBWG8A&cv_ct_cx=percy+jackson+book+1+hardcover&keywords=percy+jackson+book+1+hardcover&pd_rd_i=1423101456&pd_rd_r=e5ab9e16-455c-4765-b7c2-99ba5229811e&pd_rd_w=HIBeB&pd_rd_wg=ktcC3&pf_rd_p=a0190b3f-b29d-43d7-bff3-2f22febed405&pf_rd_r=NHTT7C1AASDW2FZA4J3E&qid=1648407122&sprefix=percy+jackson+book+1+hardcover%2Caps%2C113&sr=1-2-9e7645f9-2d19-4bff-863e-f6cdbe50f990">BUY NOW</a>
      </div>
	  
	<div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/51JmSn7VCKL._SX338_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>The Battle of the Labyrinth</h3>
        <p>The fourth book in the Percy Jackson and the Olympians series! Now going for <strong>$12.29.</strong></p>
		<a class="btn" href="https://www.amazon.com/Battle-Labyrinth-Percy-Jackson-Olympians/dp/1423101464/ref=sxin_10_mbs_w_global_sims?crid=16Z0NASPBWG8A&cv_ct_cx=percy+jackson+book+1+hardcover&keywords=percy+jackson+book+1+hardcover&pd_rd_i=1423101464&pd_rd_r=e5ab9e16-455c-4765-b7c2-99ba5229811e&pd_rd_w=HIBeB&pd_rd_wg=ktcC3&pf_rd_p=a0190b3f-b29d-43d7-bff3-2f22febed405&pf_rd_r=NHTT7C1AASDW2FZA4J3E&qid=1648407122&sprefix=percy+jackson+book+1+hardcover%2Caps%2C113&sr=1-3-9e7645f9-2d19-4bff-863e-f6cdbe50f990">BUY NOW</a>
      </div>
	  </div>
		</div>
			  <br><br><br><br>
		<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <img class="myimg" src="https://images-na.ssl-images-amazon.com/images/I/51IvEwy6JvL._SX337_BO1,204,203,200_.jpg" alt="sorcerer-img">
        <h3>The Last Olympian</h3>
        <p>The fifth and final book in the series of Percy Jackson and the Olympians! Percy Jackson and an army of young demigods must band together to stop the Lord of Time. Now going for <strong>$17.99.</strong></p>
		<a class="btn" href="https://www.amazon.com/Last-Olympian-Percy-Jackson-Olympians/dp/1423101472/ref=sxin_10_mbs_w_global_sims?crid=16Z0NASPBWG8A&cv_ct_cx=percy+jackson+book+1+hardcover&keywords=percy+jackson+book+1+hardcover&pd_rd_i=1423101472&pd_rd_r=e5ab9e16-455c-4765-b7c2-99ba5229811e&pd_rd_w=HIBeB&pd_rd_wg=ktcC3&pf_rd_p=a0190b3f-b29d-43d7-bff3-2f22febed405&pf_rd_r=NHTT7C1AASDW2FZA4J3E&qid=1648407122&sprefix=percy+jackson+book+1+hardcover%2Caps%2C113&sr=1-4-9e7645f9-2d19-4bff-863e-f6cdbe50f990">BUY NOW</a>
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