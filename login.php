<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/login.css">
  <title>Login</title>
</head>

<body>
<div class="container debug">
	<h1 class="inlog">Login</h1>
  <form method="POST" action="loginHandler.php" class="login">
    <p>
      <label for="login">Email:</label>
      <input type="text" name="email" id="login" value="">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="pwd" id="" value="">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login</button>
    </p>

    <p class="forgot-password"><a href="register.php">Registrate</a></p>
  </form>

  </div>

</body>

</html>