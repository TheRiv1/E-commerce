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
  <a href="#">Shirt & Jackets</a>
  <a href="#">Hoodies & Crewnecks</a>
  <a href="#">Caps & Beanies</a>
  <a href="#">Accessories</a>
  </div>
			<!-- <button class="header-icon debug"></button>-->
	</div> 

			<!-- logo + links-->
			<div class="header-center debug">
				<!-- link left-->
				<div class="men_hp">
			<h2><a class="men_link" href="">MENS</a></h2>
			</div>

			<!-- logo middle -->
			<img class= img_logo src="images/logo.png" alt="" width="25%";>
 
			<!-- link right -->
			<div class="women_hp">
			<h2><a class="women_link" href="">WOMENS</a></h2>
			</div>
		</div>
				<!-- vergrootglas -->
			<div class="header-right debug">
				<div class="magnify debug"><a href=""><img src="images/vergrootglas2.png" alt=""></a>
				</div>
				<!-- login -->
				<div class="log_shop">
					<a href="login.php"><img src="images/login.png" alt=""></a>
				</div>
				<!-- winkelwagen -->
				<div class="cart_shop debug">
					<a href=""><img src="images/cartshop.png" alt=""></a>
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

<div class="boxblok debug">
	<div class="img debug">Img1</div>
	<div class="img debug">Img2</div>
	<div class="img debug">Img3</div>

	<div class="img debug">Img4</div>
	<div class="img debug">Img5</div>
	<div class="img debug">Img6</div>
</div>
</body>
</html>