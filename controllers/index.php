<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once('Models/user.php');

if(isset($_SESSION['user'])){
    header('Location: index.php?page=dashboard');
} else {
    include_once('Views/pages/index.php');
}

