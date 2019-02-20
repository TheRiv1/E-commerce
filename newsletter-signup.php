<?php 

// Connection to DBase  
include "db_connection.php";

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
  $first_name= $_POST['firstname']; 
	$last_name= $_POST['lastname']; 
	$email= $_POST['email']; 
	$query= "INSERT INTO registrate (`firstname`,`lastname`, `email`) VALUES ('$first_name', '$last_name', '$email')"; 
	 
	$db_result = $conn->query($query);
	 
	echo 'You have been successfully added.' . '<br>'; 
}

 
?> 
 


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="sidepanel.css">
	<link rel="stylesheet" href="Newsletter-signup.css">
	<script src="sidepanel.js"></script>

	<title>Webshop Hoodie</title>
</head>
<body>
<div class="headerwrapper debug">
		<header class="header debug">
			<div class="header-left debug">
		<input type="image" src="images/hamicon.png" class="openbtn" onclick="openNav()"> 	
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="jack.php"><p>Shirt & Jackets</p></a>
  <a href="hoodie.php"><p>Hoodies & Crew</p></a>
  <a href="cap.php"><p>Caps & Beanies</p></a>
	<a href="#"><p>Accessories</p></a> 
  </div>
			<!-- <button class="header-icon debug"></button>-->
	</div> 

			<!-- logo + links-->
			<div class="header-center debug">
				<!-- link left-->
				<div class="men_hp">
			<h2><a class="men_link" href="jack.php">MENS</a></h2>
			</div>

			<!-- logo middle -->
			<a href="index.php"><img class= img_logo src="images/reallogo.png" alt="" width="100%";></a>
 
			<!-- link right -->
			<div class="women_hp">
			<h2><a class="women_link" href="https://rebel8.com/collections/womens">WOMENS</a></h2>
			</div>
		</div>
				<!-- vergrootglas -->
			<div class="header-right debug">
				
				<div class="magnify debug"><a href="searchfilter.php"><img src="images/vergrootglas2.png" alt=""></a>
				</div>
				<!-- login -->
				<div class="log_shop">
					<a href="login.php"><img src="images/inlog.png" alt=""></a>
				</div>
				<!-- winkelwagen -->
				<div class="cart_shop debug">
					<a href="orderdetails.php"><img src="images/cartshop.png" alt=""></a>
				</div>
			</div>
		</header>
	</div>

<body>
	<fieldset> 
<legend><p>Sign up for Newsletter</p></legend> 
<form action="Newsletter-signup.php" method="post"> 
<p> 
<label>First Name:</label> 
</p>
<div class="textbox">
<input type="text" name="firstname" id="firstname"/>
</div>
<br>
<br>

<p>
<label>Last Name:</label></p>
<div class="textbox">
<input type="text" name="lastname" id="lastname"/>
</div>
<br>
<br> 
<p>
	<label>Email:</label></p>
<div class="textbox">
<input type="text" name="email" id="email"/>
</div>
<br>
<br>
<div class="submit-letter">
<button type="submit" class="btn btn-primary" name=submit value="Signup">signup</button> 
</div>

</form> 
</fieldset> 
 
</body>
</html>