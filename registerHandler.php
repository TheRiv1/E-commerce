<?php   
        // from input name="" insert in [''];

        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        
      
        
    
        include "db_connection.php";
        try {
                $sql = "INSERT INTO registrate (`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname', '$lastname', '$email', '$pwd')";
                  $conn->exec($sql);      
                // $smt = $conn->prepare($sql);
                
                /*$smt->execute(array(':firstname' => 
                    $firstname, 
                    ':lastname' => $lastname, 
                    ':email' => $email, 
                ':password' => $password));*/
                echo "Registered successfully";
               
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
        header("location:login.php");
     
?>