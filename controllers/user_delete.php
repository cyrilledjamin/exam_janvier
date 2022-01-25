<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
} else {
    $_SESSION['last_activity'] = time();
    $_SESSION['expire'] = $_SESSION['last_activity'] + (15 * 60);
}

include_once('Models/user.php');

if(isset($_SESSION['user'])){
    if ($_SESSION['user']['isconnected'] == 'Root') {
       
        if(isset($_POST)) {
            
            $user = json_decode(file_get_contents("php://input"), false);
            // var_dump($taskObject); die;

            $suppressionUser = deleteUser($user->id);

        } else {
            header('Location: index.php?page=manage_users');
        }
       
    } else {
        header('Location: index.php?page=manage_users');
    }
} else {
    header('Location: index.php?page=login');
}