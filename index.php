<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="sidepanel.css">
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
			<a href=""><img class= img_logo src="images/reallogo.png" alt="" width="100%";></a>
 
			<!-- link right -->
			<div class="women_hp">
			<h2><a class="women_link" href="">WOMENS</a></h2>
			</div>
		</div>
				<!-- vergrootglas -->
			<div class="header-right debug">
				
				<div class="magnify debug"><a href="https://rebel8.com/collections/"><img src="images/vergrootglas2.png" alt=""></a>
				
				
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

	<!--           layers                      -->
	<main >
		<div class="container debug">

		<img src="images/main2.jpg" alt="" width="100%"> 
		
		</div>

	
</main>

<!--            image grid                     -->
<div class="cards debug">
		 <?php include "card.php"; ?>
</div>










<footer class="footer">
	<div class="footer-main">
		<div class="footer-nav">
			
			<a class="footer-navlink" href="">Shipping</a>
			<a class="footer-navlink" href="">Returns</a>
			<a class="footer-navlink" href="">Help</a>
			<a class="footer-navlink" href="">About</a>
			<a class="footer-navlink" href="">Newsletter</a>
		</div>
	</div>
</footer>
</body>
</html>