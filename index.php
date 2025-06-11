<?php
// Controlleur Global ou Routeur

if (session_status() == PHP_SESSION_NONE) {
    session_start();

    $currentTime = time();
    if(isset($_SESSION['user']) && isset($_SESSION['expire']) && $currentTime > $_SESSION['expire']) {
        header('Location: index.php?page=logout');
    }
}

include_once('models/db_connection.php');

define("HOST_URL", $_SERVER['SERVER_NAME'] . explode("?", $_SERVER["REQUEST_URI"])[0]);

if (!isset($_GET['page']) OR $_GET['page'] == 'index') {
    include_once('controllers/index.php');
} elseif($_GET['page'] == 'login'){
    include_once('controllers/login.php');
} elseif($_GET['page'] == 'settings'){
    include_once('controllers/settings.php');
} elseif($_GET['page'] == 'signup'){
    include_once('controllers/signup.php');
} elseif($_GET['page'] == 'dashboard'){
    include_once('controllers/dashboard.php');
} elseif($_GET['page'] == 'manage_users'){
    include_once('controllers/manage_users.php');
} elseif($_GET['page'] == 'user_edit'){
    include_once('controllers/user_edit.php');
} elseif($_GET['page'] == 'task_add'){
    include_once('controllers/task_add.php');
} elseif($_GET['page'] == 'task_delete'){
    include_once('controllers/task_delete.php');
} elseif($_GET['page'] == 'logout'){
    include_once('controllers/logout.php');
} elseif($_GET['page'] == 'user_delete'){ //delete user
    include_once('controllers/user_delete.php');
}
else {
    header('Location: index.php');
}