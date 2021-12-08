<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once('Models/user.php');

if(isset($_SESSION['user'])){
    if (in_array('admin', unserialize($_SESSION['user']['statuts']))) {
        $users = getUsers();
        include_once('Views/pages/manage_users.php');
    } else {
        header('Location: index.php?page=dashboard');
    }
} else {
    header('Location: index.php?page=login');
}

