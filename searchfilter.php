<?php



if(isset($_GET['by_title'])){

    search_item();
}

function search_item() {
    include "db_connection.php";

    $by_title = $_GET['by_title'];
    $by_price = $_GET['by_price'];
    $by_size = $_GET['by_size']; 

    $query = "SELECT title, info, img, price FROM jackets";  
    $query = "SELECT title, info, img, price FROM hoodies"; 
    $query = "SELECT title, info, img, price FROM caps"; 


    $set_WHERE = false;

    if(!empty($by_title)){
        $query .= " WHERE ";
        $query .= " title = '$by_title' ";
        $set_WHERE = true;
    }

    if(!empty($by_price)){
        if($set_WHERE){
            $query .= " AND ";
            $query .= " price = '$by_price' ";    
        }else{
            $query .= " WHERE ";
            $query .= " price = '$by_price' ";
            $set_WHERE = true;  
        }
    }

    if(!empty($by_size)){
        if($set_WHERE){
            $query .= " AND ";
            $query .= " size = '$by_size' ";    
        }else{
            $query .= " WHERE ";
            $query .= " size = '$by_size' ";
            $set_WHERE = true;  
        }
    }

    echo $query;

     $db_result = $conn->query($query);  

    foreach ($db_result as $row)
    {            
        echo '<div class="card">'.
                            '<h2>Jackets</h2>'.
                                '<img src="' . $row['img'] . '" alt="'  . '" style="width: 50%">' .
                                '<h1>' . $row['title']  . '</h1>' .
                                '<h2 class="prices">' .'€'. $row['price'] .',-'.'</h2>'.
                                    '<p>' . $row['info'] . '</p>' .
                                    '<a href="orderdetails.php">'. '<p>' . '<button class="cart_btn debug">'. 'Add to cart' . '</button>' . '</P>' .
                                    '</a>' .
                        '</div>';
        echo '<div class="hood debug">' .
        
            
             '<a href="hoodieinfo.php?id=' . $row['id'] . '">' .
             '<img src="' . $row['img'] . '" alt="' . $row['title'] . '" style="width: 100%">' .
             '</a>' .
             
             '<h3>' . $row['title']  .'</h3>' .
             
             '<h2 class="price">' .'€'. $row['price'] .',-'.'</h2>'.
             //'<a href=""> . 'add to cart' .
           // '<a href=".php?id=' . $row[''] . '">' .
            
            //'</a>'.
            '</div>';
   }     
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="jacket.css">
    <link rel="stylesheet" href="hoodie.css">
    <title>searchfilter</title>
</head>
<body>
    <div>
    <form action="searchfilter.php" method="GET">
    <table width="100%" border="0" style="border:none;">
      <tr>
        <td><label>Title:
        </label><input type="text" name="by_title" /></td>
        <br>
        <td><label>Price:
        </label><input type="text" name="by_price" /></td>
        <br>
        <div class="custom-select">
        <td>
        <label>Size:</label>
        <select name="by_size" id="">
        Select size:</option>
        <option value="0">
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option> 
        </td>
        </select>
        </div>
        <br>
        <!-- <td><label>Title:</label><input type="text" name="by_level" /></td> -->
        <td><input class="button" type="submit" name="submit" value="Search" /></td>
      </tr>
    </table>
    </form>
   </div>
</body>
</html>