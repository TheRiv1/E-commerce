<?php
    include "db_connection.php";        

    $sql_querie = "SELECT ID, img, name, price  FROM shirts";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {      

      echo '<div class="card debug">' .
        //link naar guitars.php + foto
            
             '<a href="guitars.php?ID=' . $row['ID'] . '">' .
             '<img src="' . $row['img'] . '" alt="' . $row['name'] . '" style="width: 100%">' .
             '</a>' .
             
             '<h4>' . $row['name']  .'</h4>' .
             
             //'<h2 class="price">' .'€'. $row['Price'] .',-'.'</h2>'.
           // '<a href="guitar_info.php?id=' . $row['Guitar_ID'] . '">' .
            
            //'</a>'.
            '</div>';
       
    }       
 
    $conn = null;
  
?>       
        



