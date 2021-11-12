<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
   // die("GGG");
}

require_once('models/user.php');

if(isset($_SESSION['user'])){
    //die("FFF");
    header('Location: index.php?page=dashboard');
} else if(isset($_POST['email']) && isset($_POST['password'])) {
    //die("NNN");
    $user = login($_POST['email'], $_POST['password']);
    $_SESSION['user'] = $user;
    //var_dump(isset($_SESSION['user']));die;
    // var_dump($user);die;
    header('Location: index.php?page=dashboard');
} else {
    require_once('views/login.php');
}

