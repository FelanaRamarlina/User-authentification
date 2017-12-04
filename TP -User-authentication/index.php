<?php
    require_once('controller/UserManager.php');
    require_once('controller/User.php');

    $userM = new UserManager;

    // Création d'utilisateur 
    $user = new User;
    $coordonnees = [
        'id' => 2,
        'email' => 'david.akin@hotmail.fr',
        'password' => 'dav',
        'firstName' => 'David',
        'lastName' => 'AKIN',
        'address' => '13 avenue Jeanne',
        'postalCode' => '77458',
        'city' => 'Paris',
        'amdin' => 0
    ];
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
        <form class="connexion" action="Model/connexion.php" method="POST">
          <p>login :</p>
          <input id="login" type="text" name="login">
          <p>mot de passe :</p>
          <input id="password" type="password" name="password"><br><br>
          <input type="submit" value="Connexion">
        </form>
    </body>
</html>