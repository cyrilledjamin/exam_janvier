<?php
// Controlleur Global ou Routeur

include_once('models/db_connection.php');

if (!isset($_GET['page']) OR $_GET['page'] == 'index') {
    include_once('controllers/index.php');
} else {
    header('Location: index.php');
}