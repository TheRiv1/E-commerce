<?php
//connection to database
  session_start();
  // $connect = mysqli_connect('localhost','root','','register');
  include "db_connection.php";

    if(isset($_POST["add_to_cart"]))
    {
      if(isset($_SESSION["shopping_cart"]))
      {
        $item_array_id = array_column($_SESSION["shopping_cart"], "id");
        if(!in_array($_GET["id"], $item_array_id))
        {
          $count = count($_SESSION["shopping_cart"]);
    //get all item detail
            $item_array = array(
                      'id'       => $_GET["id"],
                      'img'   =>   $_POST["hidden_img"],
                      'title'     =>   $_POST["hidden_title"],
                      'price'    =>   $_POST['hidden_price'],
                      'quantity' =>   $_POST["quantity"]

            );
            $_SESSION["shoppingcart"][$count] = $item_array;
        }
        else
        {
          //product added then this block 
          echo '<script>alert("Item allready added ")</script>';
          echo '<script>window.location = "index.php"</script>';
        }
      }
      else
      {
        //cart is empty excute this block
         $item_array = array(
                      'id'      =>   $_GET["id"],
                      'img'     =>   $_POST["hidden_img"],
                      'title'   =>   $_POST["hidden_title"],
                      'price'   =>   $_POST['hidden_price'],
                      'quantity'=>   $_POST["quantity"]

            );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
    }
//Remove item in cart 
    if(isset($_GET["action"]))
    {
      if($_GET["action"] == "delete")
      {
        foreach($_SESSION["shopping_cart"] as $row)
            {
              if($row["id"] == $_GET["id"])
              {
                unset($_SESSION["shopping_cart"][$row]);
                echo '<script>alert("Item removed")</script>';
                echo '<script>window.location="indax.php</script>';
              }
            }
      }
    }





?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order Details</title>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
	<div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr> 
                              <th>product image</th> 
                               <th width="40%">Title</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                             <?php 
                           if(!empty($_SESSION["shopping_cart"]))
                           {
                            $total = 0;
                            foreach($_SESSION["shopping_cart"] as $row)
                           {

                             ?>
                          <tr> 
                               <td><img src="img/<?php echo $row['img'];?>" style="width: 100px;"></td>
                             
                               <td><?php echo $row[''];?></td>  
                               <td><?php echo $row['info']; ?></td>  
                               <td>$<?php echo $row['price'];?></td>  
                               <td>$<?php echo number_format($row[""] * $row['price'],2);?></td>  
                               <td><a href="index.php?action=delete&id=<?php  echo $row['id'];?>"><span class="btn btn-danger">Remove</span></a></td>  
                          </tr>  
                          <?php $total = $total + ($row[""] * $row['price']);
                        }
                        ?>
                           
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$<?php echo number_format($total);?></td>  
                               <td></td>  
                          </tr> 
                          <?php } ?> 
                           
                     </table>  
                </div>  
           </div>  
           <br />  
</body>
</html>