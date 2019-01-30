<?php
    include "db_connection.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = "SELECT Firstname
               FROM registrate 
               WHERE Email = '$email' 
               AND Password = '$password'";
    $db_result = $conn->query($result);
    if ($db_result->rowCount() != 0){
        foreach($db_result as $row){
            $firstname = $row['Firstname'];
        }
        
        echo "welkom " . $firstname;
    }
    else 
    {
        echo 'The username or password is incorrect!';
        header("location:login.php?et=1;");
    }
?>