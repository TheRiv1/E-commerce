<?php 




//connection to database
  session_start();
  include "db_connection.php";  

  // $connect = mysqli_connect('localhost','root','','cart');
   echo "do you see this";
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
                      'id'       =>   $_GET["id"],
                      'img'     =>   $_POST["hidden_image"],
                      'title'     =>   $_POST["hidden_title"],
                      'price'    =>   $_POST['hidden_price'],
                      'quantity' =>   $_POST["quantity"]

            );
            $_SESSION["shopping_cart"][$count] = $item_array;
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
                      'id'       =>   $_GET["id"],
                      'img'     =>   $_POST["hidden_image"],
                      'title'     =>   $_POST["hidden_name"],
                      'price'    =>   $_POST['hidden_price'],
                      'quantity' =>   $_POST["quantity"]

            );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
    }
//Remove item in cart 
    if(isset($_GET["action"]))
    {
      if($_GET["action"] == "delete")
      {
        foreach($_SESSION["shopping_cart"] as $key=>$row)
            {
              if($row["id"] == $_GET["id"])
              {
                unset($_SESSION["shopping_cart"][$key]);
                echo '<script>alert("Item removed")</script>';
                echo '<script>window.location="indax.php</script>';
              }
            }
      }
    }





?>



<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Shopping Cart</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body> 

       <!--   Shopping Cart -->
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center"> Shopping Cart</h3><br />  
                  <?php
                    $query = "SELECT * FROM jackets ORDER BY id ASC";

                    $db_result = $conn->query($query); 
                    // $result = mysqli_query($connect,$query);
                    // if(mysqli_num_rows($result) > 0)
                    // {
                    //   while($row = mysqli_fetch_array($result))
                    //   {


                  ?>
                <div class="col-md-4">  
                     <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src=""<?php echo $row['img'];?>" class="img-responsive" style="    width: 100px;" /><br />  
                               <h4 class="text-info"><?php echo $row['title'];?></h4>  
                               <h4 class="text-danger">$<?php echo $row['price'];?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />
                             <input type="hidden" name="hidden_title" value="<?php echo $row['title'] ?>" /> 
                           <input type="hidden" name="hidden_img" value="<?php echo $row['img'];?>">
                          <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"> 

                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
              </div>
            </body>
          </html>
