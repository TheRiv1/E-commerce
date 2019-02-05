<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="capinfo.css">
	
	<title>Capinfo</title>
</head>
<body>		


<?php

	//capinfo.php
		include "db_connection.php";  

		 
    
		      if(isset($_GET['id'])){

		      	$g_id = $_GET['id'];
		      }else{
		      	$g_id = 1;
		      }

    $sql_querie = "SELECT id, img, title, price, info FROM caps WHERE id = '$g_id'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        echo '<div class="card">'.
							'<h2>Caps</h2>'.
  								'<img src="' . $row['img'] . '" alt="'  . '" style="width: 80%">' .
  								'<h1>' . $row['title']  . '</h1>' .
  								'<h2 class="prices">' .'€'. $row['price'] .',-'.'</h2>'.
									'<p>' . $row['info'] . '</p>' .
									'<a href="orderdetails.php">'. '<p>' . '<button class="cart_btn debug">'. 'Add to cart' . '</button>' . '</P>' .
									'</a>' .
						'</div>';
   }     
   
	?>
   
		
		  

		



	</body>
</html>
