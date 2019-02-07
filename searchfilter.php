<?php



if(isset($_GET['by_title'])){

    search_item();
}

function search_item() {
    include "db_connection.php";

    $by_title = $_GET['by_title'];
    $by_price = $_GET['by_price'];
    $by_size = $_GET['by_size']; 

    $query = "SELECT img, title, price , size,  FROM jackets";  
    

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
                                    '<p>' . $row['size'] . '</p>' .
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidepanel.css">
    <link rel="stylesheet" href="searchfilter.css">
    <script src="sidepanel.js"></script>

    <title>Webshop Hoodie</title>
</head>
<body>
<div class="headerwrapper debug">
        <header class="header debug">
            <div class="header-left debug">
        <input type="image" src="images/hamicon.png" class="openbtn" onclick="openNav()">   
    <div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="jack.php"><p>Shirt & Jackets</p></a>
  <a href="hoodie.php"><p>Hoodies & Crew</p></a>
  <a href="cap.php"><p>Caps & Beanies</p></a>
    <a href="#"><p>Accessories</p></a> 
  </div>
            <!-- <button class="header-icon debug"></button>-->
    </div> 

            <!-- logo + links-->
            <div class="header-center debug">
                <!-- link left-->
                <div class="men_hp">
            <h2><a class="men_link" href="jack.php">MENS</a></h2>
            </div>

            <!-- logo middle -->
            <a href="index.php"><img class= img_logo src="images/reallogo.png" alt="" width="100%";></a>
 
            <!-- link right -->
            <div class="women_hp">
            <h2><a class="women_link" href="">WOMENS</a></h2>
            </div>
        </div>
                <!-- vergrootglas -->
            <div class="header-right debug">
                
                <div class="magnify debug"><a href=""><img src="images/vergrootglas2.png" alt=""></a>
                </div>
                <!-- login -->
                <div class="log_shop">
                    <a href="login.php"><img src="images/inlog.png" alt=""></a>
                </div>
                <!-- winkelwagen -->
                <div class="cart_shop debug">
                    <a href="orderdetails.php"><img src="images/cartshop.png" alt=""></a>
                </div>
            </div>
        </header>
    </div>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="jacket.css">
    <link rel="stylesheet" href="hoodie.css">
    <title>searchfilter</title>
</head> -->


    <div>
    <form action="searchfilter.php" method="GET">
    <table width="100%" border="0" style="border:none;">
      <tr>
        <td><label class="label">Title:</label>
        <div class="textbox"><input type="text" name="by_title" />
        </td>
    </div>
        <br>
        <td><label class="label">Price:</label>
        <div class="textbox"><input type="text" name="by_price" />
        </td>
    </div>
        <br>
        
        <td>
        <label class="label">Size:</label>
        <select name="by_size" id="dropdown-selector">
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
        <td><input class="button-filter" type="submit" name="submit" value="Search" /></td>
      </tr>
    </table>
    </form>
   </div>
</body>
</html>