<?php

session_start();

$errors = [];
$signup_correct_data = [];

include_once('models/user.php');

if(isset($_SESSION['user'])){
    header('Location: index.php?page=dashboard');
} else if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repassword'])) {
   
    $signup_correct_data['prenom'] = $_POST['prenom'];
    $signup_correct_data['nom'] = $_POST['nom'];
    $signup_correct_data['phone'] = $_POST['phone'];

   if($_POST['email'] == 'alaincesar@hotmail.fr') {
       $errors['email'] = "Cet utilisateur existe deja";
   } else {
       $signup_correct_data['email'] = $_POST['email'];
   }

   if(count($_POST['password']) < 8) {
       $errors['password'] = "Votre mot de passe doit contenir au moins 8 caracteres";
   } 

   if($_POST['repassword'] !== $_POST['password']) {
       $errors['repassword'] = "Les deux mots de passe ne correspondent pas";
   } 
   
   if(!count($errors)) {
       $_SESSION['signup_success'] = "Bravo! votre compte a ete cree avec success, veuillez vous connecter";
       header('Location: index.php?page=login');
   } else {
       $_SESSION['signup_errors'] = $errors;
       $_SESSION['signup_correct_data'] = $signup_correct_data;
       header('Location: index.php?page=signup');
   }
    
} else {
    include_once('Views/pages/signup.php');
}


