<?php 
function login($email, $password) { 
    global  $bdd; 

    $_email = isset($email) ? $email : null;
    $_password = isset($password) ? $password : null;    

    $req = $bdd->prepare("SELECT * FROM user WHERE email = :email AND activated = 1"); 
    $req->bindParam(':email', $_email, PDO::PARAM_STR); 
    $req->execute();

    $user = $req->fetch(); 

    if(!empty($user) && password_verify($_password, $user['password'])) {

        return $user;
    } 

    return [];
    
}