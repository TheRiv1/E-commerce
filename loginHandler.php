<?php
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
        
        echo "welkom " . $firstname;

    }
    else 
    {
        echo 'The username or password is incorrect!';
        header("location:login.php?et=1;");
       // header("location:index.php");
    }
?>