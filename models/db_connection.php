<?php
// Connexion à la base de données

/*
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=djamin-exam;charset=utf8', 'root', '76416558Gaus');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}*/

class Database {
    public $connection;
    private static $instance;
    private $_host = 'localhost';
    private $_database = 'djamin-exam';
    private $_username = 'root';
    private $_password = '76416558Gaus';

  
    private function __construct() {
        try {
            $this->connection = new PDO('mysql:host='.$this->_host.';dbname='.$this->_database.';charset=utf8', $this->_username, $this->_password);
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }

    //retourne une seule instance
    public static function getInstance() {
        //vérifie si l'instance de connexion existe
        if(!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
  
}