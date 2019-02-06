<?php
//start session to welcome user after login
session_start();


    include "db_connection.php";
    // need email and password for login
    $email = $_POST['email'];//variable email => name="email" from input
    $pwd = $_POST['pwd'];// variable pwd => name="pwd" from input 
    // query to output firstname 
    $result =  "SELECT firstname          
                FROM registrate 
                WHERE email = '$email'
                AND password = '$pwd'";
     //send query           
    $db_result = $conn->query($result);
    if ($db_result->rowCount() != 0){
        foreach($db_result as $row){
            $firstname = $row['firstname'];
        }
        
        // echo "welkom " . ;
        $_SESSION['firstname']= $firstname;
        header('location: index.php');
        

    }
    else 
    {   
       echo "incorrect username or password please try again";
        
         //header("location:login.php?et=1;");
       // header("location:index.php");
   }
?>