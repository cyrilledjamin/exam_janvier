<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link type="text/css" rel="stylesheet" href="./views/css/styles.css" >
    <title>Projet Janvier</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="py-3 navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
      <div class="container">
        <a href="index.php?page=index" class="navbar-brand">ToDo</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#" class="nav-link">Bienvenue, inconnu !</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class='container form-signin main-container'>
        <form method="POST" action="index.php?page=login">
            <h1 class="mb-3 h3 fw-normal">Veuillez vous connecter</h1>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
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
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>