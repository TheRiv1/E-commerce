<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jacket.css">
            <title>Shirts & Jackets</title>
        </head>
        <body>
    <h1><a href="index.php">Shirts & Jackets</a></h1>
<div class="jackets debug">
<?php
    include "db_connection.php";        

    $sql_querie = "SELECT jackets_id, img, title, price  FROM jackets";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {      

      echo '<div class="jack debug">' .
        //link naar guitars.php + foto
            
             '<a href="jackinfo.php?jackets_id=' . $row['jackets_id'] . '">' .
             '<img src="' . $row['img'] . '" alt="' . $row['title'] . '" style="width: 100%">' .
             '</a>' .
             
             '<h3 class="jack-font">' . $row['title']  .'</h3>' .
             
             '<h2 class="price">' .'€'. $row['price'] .',-'.'</h2>'.
             //'<a href=""> . 'add to cart' .
           // '<a href=".php?id=' . $row[''] . '">' .
            
            //'</a>'.
            '</div>';
       
    }       
 
    $conn = null;
  
?>       
 </div>
            
       </body>
        </html>     