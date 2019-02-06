

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/login.css">
  <title>Login</title>
</head>

<body>
<div class="container debug">
	<h1 class="inlog">Login</h1>
  <form class="login" method="POST" action="loginHandler.php" >
    
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
      <input class="login-button" type="submit" value="login">
    </p>
  </form>
    <p class="register-form"><a href="register.php">Registrate here</a></p>
  
  </div>

</body>

</html>