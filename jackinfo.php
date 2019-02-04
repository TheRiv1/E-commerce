<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="jackinfo.css">
	<title>Jackinfo</title>
</head>
<body>
	
<?php

	//jackinfo.php
		include "db_connection.php";  

		 
    
		      if(isset($_GET['id'])){

		      	$g_id = $_GET['id'];
		      }else{
		      	$g_id = 1;
		      }

    $sql_querie = "SELECT id, img, title, price, info FROM jackets WHERE id = '$g_id'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="jacket-single debug">' .
        						//div left column
		        			'<div class="img-left debug">' .
		        			'<img src="' . $row['img'] . '" alt="'  . '" style="width: 50%">' .
		        				//Brand + Model
		             		// '<h1>' . $row['']  . ' ' . $row[''] .'</h1>' . 

		             			 //Price
		             		// '<h2 class="prices">' .'€'. $row[''] .',-'.'</h2>'.  

		             		//Img 
		             		
		            	
		             	//div right column	
		             '</div>' .

								 '<div class="info-right debug">' .
				             //Info
				             '<p>'  .  $row['title'] . '</p>' . 
				             //price
				             '<h2 class="prices">' .'€'. $row['price'] .',-'.'</h2>'. 
				             //button
				             '<a href="shoppingcart.php">'. '<p>' . '<button class="cart_btn debug">'. 'Add to cart' . '</button>' . '</P>' .
				              '</a>' .
				              '<p>' . $row['info'] . '</p>' .
		             '</div>' .
             '</div>';
       
    }     
   
	?>

	</body>
</html>