<?php
session_start();

if(isset($_SESSION['user'])){
    require_once('views/dashboard.php');
} else {
    header('Location: index.php?page=login');
}

