<?php
    include "db_connection.php";        

    $sql_querie = "SELECT Guitar_ID, Guitar_Articlenumber, Guitar_Brand, Guitar_Model, Guitar_Price, Guitar_Img, Guitar_Info FROM guitars";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Card</title>
</head>
<body>
	<div class="card">
  <img src="jeans3.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Tailored Jeans</h1>
  <p class="price">$19.99</p>
  <p>Some text about the jeans..</p>
  <p><button>Add to Cart</button></p>
</div>
</body>
</html>