<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cap.css">
            <title>Caps & Beanies</title>
        </head>
        <body>
    <h1><a href="index.php">Caps & Beanies</a></h1>
<div class="caps debug">
<?php
    include "db_connection.php";        

    $sql_querie = "SELECT caps_id, img, title, price  FROM caps";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {      

      echo '<div class="cap debug">' .
        //link naar guitars.php + foto
            
             '<a href="capinfo.php?caps_id=' . $row['caps_id'] . '">' .
             '<img src="' . $row['img'] . '" alt="' . $row['title'] . '" style="width: 100%">' .
             '</a>' .
             
             '<h3>' . $row['title']  .'</h3>' .
             
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