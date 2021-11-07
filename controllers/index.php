<?php

// On demande les 5 derniers  pages (modèle)

// include_once('Models/get_pages.php');
// $billets  =  get_pages(0,  5);

//  On  effectue  du  traitement  sur  les  données  (contrôleur)
//  Ici,  on  doit  surtout  sécuriser  l'affichage


// foreach($pages  as  $cle  =>  $page) { 
//     $billets[$cle]['titre']  =  htmlspecialchars($billet['titre']); 
//     $billets[$cle]['contenu']  = nl2br(htmlspecialchars($billet['contenu'])); 
// }

//  On  affiche  la  page  (vue) 
// include_once('vue/blog/index.php');

include_once('models/user.php');

$user = login('cyrilledjamin@yahoo.fr', '123456789');
//var_dump($user);die;

include_once('views/index.php');