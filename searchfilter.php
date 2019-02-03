<?php

    //searchFilter.php
    $searchValue = $_GET['svalue'];

    include "db_connection.php";        

    $sql_querie = "SELECT ID, img, name, price FROM shirts WHERE name LIKE '%".$searchValue."%'";
    
    $db_result = $conn->query($sql_querie);  

    if($db_result -> rowCount() == 0){
        echo "<h1>No items found</h1>";
    }else{
        echo "<h1> available</h1>";
    }
    

    foreach ($db_result as $row)
    {            
        
        echo '<div class="card debug">' .
        //
            
            '<a href="card.php?ID=' . $row['img']  . '</a>' .
            '<h1>' . $row['img']  .  '" style="width: 25%">' . ' <h1>' .
            '<h1>' . $row['name'] .'</h1>' .
            '<h2 class="price">' .'€'. $row['price'] .',-'.'</h2>'.
            '</div>';
             
             // '<h2 class="price">' .'€'. $row['Guitar_Price'] .',-'.'</h2>'.
             // '<img src="' . $row['Guitar_Img'] . '" alt="' . $row['Guitar_Brand'] . '" style="width: 25%">' .
             
             // '</a>'.
            
            // '<a href="guitar_info.php?id=' . $row['Guitar_ID'] . '">' .
       
    }  
        
     
 
        $conn = null;
  
?>

</body>
</html>