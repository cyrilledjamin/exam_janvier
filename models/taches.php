<?php 

// Recuperer toutes les taches
function getTasks() {
    $bdd = Database::getInstance();

    try {
        $req = $bdd->connection->prepare("SELECT * FROM tache"); 
        $req->execute();
        $users = $req->fetchAll(); 

        return $users;

    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

// Recuperer une tache via son id
function getTaskById($task_id) {
    $bdd = Database::getInstance(); 

    $id = isset($task_id) ? $task_id : null;

    try {
        $req = $bdd->connection->prepare("SELECT * FROM tache WHERE id = :id"); 
        $req->bindParam(':id', $id, PDO::PARAM_STR); 
        $req->execute();

        $user = $req->fetch(); 

        if(!empty($user)) {

            return $user;
        } 
        else {
            return null;
        }
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

// Mettre a jour le statut de l'utilisateur
function updateUserStatus($user_id, $statuts) {
    $bdd = Database::getInstance(); 

    $id = isset($user_id) ? $user_id : null;
    $statuts = isset($statuts) ? $statuts : null;

    // var_dump($statuts); die;

    try {
        $req = $bdd->connection->prepare("UPDATE user SET statuts = :statuts WHERE id = :id"); 
        $req->bindParam(':id', $id, PDO::PARAM_STR); 
        $req->bindParam(':statuts', $statuts, PDO::PARAM_STR); 
        $update_successfull = $req->execute();

        if($update_successfull){
            return true;
        } else {
            return false;
        }
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}