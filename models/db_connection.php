<?php
// Connexion à la base de données

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=djamin-exam;charset=utf8', 'root', '76416558Gaus');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}