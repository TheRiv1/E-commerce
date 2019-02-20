<?php 

include "db_connection.php";

session_start();

$cart_id = $_GET['cart_id'];


try{
	$sql = "INSERT INTO cart(cart_id)
	VALUES('$cart_id')";
	$conn->exec($sql);
	echo "Item added to cart";
}
catch(PDOException $e)
{
	echo $sql. "<br>" . $e->getMessage();
}

?>

 





 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Add To Cart</title>
 </head>
 <body>
 	
 </body>
 </html>