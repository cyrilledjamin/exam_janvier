<?php 
  //session_start();
  include_once(__DIR__ . '/../partials/header.php'); 

?>

    <main id="main" class='mb-5 container d-flex justify-content-center main-container'>
        <form method="POST" action="index.php?page=signup">
            <h1 class="mb-2 h3 fw-normal">Mon compte</h1>
            <h1 class="mb-5 h6 fw-normal fst-italic">(Double cliquer dans le champ pour modifier)</h1>

            <!-- Prenom et Nom -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating input-group has-validation">
                        <input name="prenom" type="text" class="form-control<?= isset($_SESSION['signup_errors']['prenom']) ? " border-danger" : "" ?>" id="prenom" placeholder="Prénom" required value=<?= $_SESSION['user']['first_name'] ?> disabled>
                        <label for="prenom">Prénom</label>
                    </div>
                    <?php if(isset($_SESSION['signup_errors']['prenom'])): ?>
                    <small id="passwordHelp" class="mt-2 text-danger">
                        <?= $_SESSION['signup_errors']['prenom'] ?>
                    </small>
                    <?php endif; ?>
                </div>
    
                <div class="col-md-6">
                    <div class="form-floating">
                        <input name="nom" type="text" class="form-control<?= isset($_SESSION['signup_errors']['nom']) ? " border-danger" : "" ?>" id="nom" placeholder="Nom" required value=<?= $_SESSION['user']['last_name'] ?> disabled>
                        <label for="nom">Nom</label>
                    </div>
                    <?php if(isset($_SESSION['signup_errors']['nom'])): ?>
                    <small id="passwordHelp" class="mt-2 text-danger">
                        <?= $_SESSION['signup_errors']['nom'] ?>
                    </small>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Telephone -->
            <div class="mt-3 form-floating">
                <input name="phone" type="text" class="form-control<?= isset($_SESSION['signup_errors']['phone']) ? " border-danger" : "" ?>" id="phone" placeholder="Telephone" value=<?= $_SESSION['user']['phone'] ?> disabled>
                <label for="phone">Telephone</label>
            </div>
            <?php if(isset($_SESSION['signup_errors']['phone'])): ?>
            <small id="passwordHelp" class="mt-2 text-danger">
                <?= $_SESSION['signup_errors']['phone'] ?>
            </small>
            <?php endif; ?>

            <!-- Email -->
            <div class="mt-3 form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value=<?= $_SESSION['user']['email'] ?> disabled>
                <label for="floatingInput">Email</label>
            </div>

            <?php if(isset($_SESSION['signup_errors']['email'])): ?>
            <small id="passwordHelp" class="mt-2 text-danger">
                <?= $_SESSION['signup_errors']['email'] ?>
            </small>
            <?php endif; ?>

            <!-- Mot de passe -->
            <div  class="mt-3">
               <span class="fw-bold">Modifier le mot de passe</span>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mt-3 form-floating">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Ancien Mot de passe</label>
                    </div>

                    <?php if(isset($_SESSION['signup_errors']['password'])): ?>
                    <div class="text-danger"><?= $_SESSION['signup_errors']['password'] ?></div>
                    <?php endif; ?>
                </div>

                <div class="col-md-6">
                    <div class="mt-3 form-floating">
                        <input name="repassword" type="password" class="form-control" id="refloatingPassword" placeholder="Password">
                        <label for="refloatingPassword">Repeter le mot de passe</label>
                    </div>
                    <?php if(isset($_SESSION['signup_errors']['repassword'])): ?>
                    <div class="text-danger"><?= $_SESSION['signup_errors']['repassword'] ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Type de compte -->
            <div  class="mt-5">
                Statuts : <span class="fst-italic"><?= implode(" - ", unserialize($_SESSION['user']["statuts"])) ?></span>
            </div>

            <button class="mt-5 w-100 btn btn-lg btn-primary" type="submit">Enregistrer</button>
        </form>
    </main>

  <?php include_once(__DIR__ . '/../partials/footer.php'); ?>