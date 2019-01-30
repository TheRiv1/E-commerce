db_connection:
<?php

//db_connection.php

$servername = "localhost";
$username = "root";
$password = "";
$database = "register";

			// connect to database
try {		
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully: <br>"; 
    }
catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

?>