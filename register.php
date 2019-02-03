<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="register.css" />
    <title>Register</title>
</head>
<body>

  <div class="registerbox">
    <form action="registerHandler.php" method="POST"> 
     <h1>Registration</h1> 

    <p>
      <label for="firstname">Firstname:</label>
      <div class="textbox">
      <input type="text" name="fname">
      </div>
    </p>

    <p>
      <label for="lastname">Lastname:</label>
      <div class="textbox">
      <input type="text" name="lname" id="" value="">
      </div>
    </p>

    <p>
      <label for="email">Email:</label>
      <div class="textbox">
      <input type="text" name="email">
      </div>
    </p>

    <p>
      <label for="password">Password:</label>
      <div class="textbox">
      <input type="password" name="pwd" id="" value="">
      </div>
    </p>

     <p class="login-submit">
      <input class="register-button" type="submit" value="Submit">
    </p>

    </div>
    



        
</body>
</html>