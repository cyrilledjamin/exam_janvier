<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
   // die("GGG");
}

require_once('models/user.php');

if(isset($_SESSION['user'])){
    header('Location: index.php?page=dashboard');
} else if(isset($_POST['email']) && isset($_POST['password'])) {
    $user = login($_POST['email'], $_POST['password']);
    $_SESSION['user'] = $user;

    header('Location: index.php?page=dashboard');
} else {
    require_once('views/login.php');
}

