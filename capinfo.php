<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="sidepanel.css">
	<link rel="stylesheet" href="capinfo.css">
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


<?php

	//capinfo.php
		include "db_connection.php";  

		 
    
		      if(isset($_GET['id'])){

		      	$g_id = $_GET['id'];
		      }else{
		      	$g_id = 1;
		      }

    $sql_querie = "SELECT caps_id, img, title, price, info FROM caps WHERE caps_id = '$g_id'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        echo  
 						'<div class="container">'.
    					'<div class="wrapper">' .
								'<div class="outer outer1">' .
									'<div class="content animated fadeInLeft">' .
										'<span class="bg animated fadeInDown">'. 'EXCLUSIVE' . '</span>'.
											'<h1>' . $row['title'] . '<br>'. '€' .$row['price'] . '</h1>' .
												'<p>' . 'This nylon water resistant windbreaker anorak jacket is coated with a 100% water proof coating' .'</p>' .

													'<div class="button">' .
												'<a class="cart-btn" href="add_to_cart.php"><i class="cart-icon ion-bag"></i>ADD TO CART</a>' .
											'</div>' .

											'</div>' .
										'</div>' .
									'<div class="outer outer2">' .
								'<img src="' . $row['img'] . '" alt="'  . '" style="width: 80%" class="animated fadeInRight">' . 
							'</div>' .
						'</div>' .
					'</div>';
  
   }     
   
	?>
   
		
		  

		



	</body>
</html>
