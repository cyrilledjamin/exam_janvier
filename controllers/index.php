<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once('models/user.php');

if(isset($_SESSION['user'])){
    header('Location: index.php?page=dashboard');
} else {
    include_once('Views/pages/index.php');
}

