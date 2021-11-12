<?php
// Controlleur Global ou Routeur

require_once('models/db_connection.php');

if (!isset($_GET['page']) OR $_GET['page'] == 'index') {
    require_once('controllers/index.php');
} elseif( $_GET['page'] == 'login') {
    require_once('controllers/login.php');
} elseif($_GET['page'] == 'inscription') {
    require_once('views/inscription.php');
} elseif( $_GET['page'] == 'dashboard'){
    require_once('controllers/dashboard.php');
} elseif( $_GET['page'] == 'logout'){
    require_once('controllers/logout.php');
} else {
    header('Location: index.php');
}