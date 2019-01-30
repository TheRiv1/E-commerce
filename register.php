<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/register.css" />
    
</head>
<body>
    <form action="registerHandler.php" method="POST"> 
      
    <p>
      <label for="firstname">Firstname:</label>
      <input type="text" name="fname" id="" value="">
    </p>

    <p>
      <label for="lastname">Lastname:</label>
      <input type="text" name="lname" id="" value="">
    </p>

    <p>
      <label for="email">Email:</label>
      <input type="text" name="email">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="pwd" id="" value="">
    </p>

     <p class="login-submit">
      <button type="submit" class="register-button">Register</button>
    </p>
    



        <!-- <label for="man">Man:</label> 
        <input type="radio" name="gender" value="man" id="man">
        <label for="man">Vrouw:</label>
        <input type="radio" name="gender" value="vrouw" id="vrouw">
        <label for="man">Neutraal:</label>
        <input type="radio" name="gender" value="neutraal" id="neutraal">
        <label for="man">Mysterie:</label>
        <input type="radio" name="gender" value="gorilla" checked id="gorilla"><br>
        <input class="input_fields" type="text" name="firstname" placeholder="Voornaam" required maxlength="32" autofocus><br>
        <input class="input_fields"type="text" name="lastname" placeholder="Achternaam" required maxlength="32"><br>
        <input class="input_fields" type="email" name="email" placeholder="Emailadres" required maxlength="32"><br>
        <input class="input_fields" type="password" name="password1" minlenght=8 placeholder="Paswoord" required maxlength="32"><br>
        <input class="input_fields" type="password" name="password2" placeholder="Valideer paswoord" required maxlength="32"><br>
        <label for="nieuwsbrief">Abonneren op nieuwsbrief ? </label>
        <input type="checkbox" name="newsletter" value="1" checked id="nieuwsbrief"><br>
        <button type="submit">versturen</button>
        <button type="reset">resetten</button>
    </form>-->
</body>
</html>