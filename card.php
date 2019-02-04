<?php
    include "db_connection.php";        

    $sql_querie = "SELECT ID, img, name, price  FROM shirts";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {      

      echo '<div class="card debug">' .
        //link naar guitars.php + foto
            
             '<a href=".php?ID=' . $row['ID'] . '">' .
             '<img src="' . $row['img'] . '" alt="' . $row['name'] . '" style="width:100%">' .
             '</a>' .
             
             '<h3>' . $row['name']  .'</h3>' .
             
             '<h2 class="price">' .'€'. $row['price'] .',-'.'</h2>'.
             //'<a href=""> . 'add to cart' .
           // '<a href=".php?id=' . $row[''] . '">' .
            
            //'</a>'.
            '</div>';
       
    }       
 
    $conn = null;
  
?>       
        



