<?php include_once(__DIR__ . '/../partials/header.php'); ?>

    <main class='container form-signin main-container'>
        <form method="POST" action="index.php?page=login">
            <h1 class="mb-3 h3 fw-normal">Veuillez vous connecter</h1>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mt-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="mb-3 checkbox">
                <label>
                    <input name="remember-me" type="checkbox" value="remember-me"> Rester connecté
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
        </form>
        <p>Pas encore inscrit ? <a href="index.php?page=signup" class="text-decoration-none">Créez votre compte</a></p>
    </main>

  <?php include_once(__DIR__ . '/../partials/footer.php'); ?>