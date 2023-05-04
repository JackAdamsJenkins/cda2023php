<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    setcookie('login', $login, time() + (86400 * 30), '/');
    setcookie('password', $password, time() + (86400 * 30), '/');
  }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<form method="post" action="inscription.php">
  <label for="login">Login:</label>
  <input type="text" id="login" name="login"><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br>

  <input type="submit" value="Submit">
</form>
</body>
</html>