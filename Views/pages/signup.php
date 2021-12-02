<?php 
  //session_start();
  include_once(__DIR__ . '/../partials/header.php'); 

?>

    <main id="main" class='container form-signin main-container'>
        <form method="POST" action="index.php?page=signup">
            <h1 class="mb-3 h3 fw-normal">Création de compte</h1>

            <div class="form-floating">
                <input name="prenom" type="text" class="form-control" id="prenom" placeholder="Prénom" required value=<?= isset($_SESSION['signup_correct_data']['prenom']) ? $_SESSION['signup_correct_data']['prenom'] : '' ?>>
                <label for="prenom">Prénom</label>
            </div>

            <div class="form-floating mt-3">
                <input name="nom" type="text" class="form-control" id="nom" placeholder="Nom" required value=<?= isset($_SESSION['signup_correct_data']['nom']) ? $_SESSION['signup_correct_data']['nom'] : '' ?>>
                <label for="nom">Nom</label>
            </div>

            <div class="form-floating mt-3">
                <input name="phone" type="text" class="form-control" id="phone" placeholder="Telephone" value=<?= isset($_SESSION['signup_correct_data']['phone']) ? $_SESSION['signup_correct_data']['phone'] : '' ?>>
                <label for="phone">Telephone</label>
            </div>

            <div class="form-floating mt-3">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value=<?= isset($_SESSION['signup_correct_data']['email']) ? $_SESSION['signup_correct_data']['email'] : '' ?>>
                <label for="floatingInput">Email</label>
            </div>
            <?php if(isset($_SESSION['signup_errors']['email'])): ?>
            <div class="text-danger"><?= $_SESSION['signup_errors']['email'] ?></div>
            <?php endif; ?>
            <div class="form-floating mt-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Mot de passe</label>
            </div>
            <?php if(isset($_SESSION['signup_errors']['password'])): ?>
            <div class="text-danger"><?= $_SESSION['signup_errors']['password'] ?></div>
            <?php endif; ?>

            <div class="form-floating mt-3">
                <input name="repassword" type="password" class="form-control" id="refloatingPassword" placeholder="Password">
                <label for="refloatingPassword">Repeter le mot de passe</label>
            </div>
            <?php if(isset($_SESSION['signup_errors']['repassword'])): ?>
            <div class="text-danger"><?= $_SESSION['signup_errors']['repassword'] ?></div>
            <?php endif; ?>

            <button class="w-100 btn btn-lg btn-primary" type="submit">S'inscrire</button>
        </form>
    </main>

  <?php include_once(__DIR__ . '/../partials/footer.php'); ?>