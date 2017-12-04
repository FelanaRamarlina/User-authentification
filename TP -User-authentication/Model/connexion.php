<?php 
    require_once('../controller/UserManager.php');
    require_once('../controller/User.php');
    $userM = new UserManager;

    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $userM -> login($login,$password);
    
?>