<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once('Models/user.php');

if(isset($_SESSION['user'])){
    $user =  getUserById($_SESSION['user']['id']);
    include_once('Views/pages/settings.php');
} else {
    header('Location: index.php?page=login');
}


