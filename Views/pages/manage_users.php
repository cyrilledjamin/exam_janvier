<?php include_once(__DIR__ . '/../partials/header.php'); ?>

    <main class='main-content container main-container'>
      <h1>Gestion des utilisateurs</h1>

      <div class="mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Statuts</th>
                    <th class="text-center" scope="col">Nbre de tâches</th>
                    <th scope="col">Activé</th>
                    <th class="text-center" scope="col">Etat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $index=>$user): ?>
                
                <tr>
                    <th scope="row"><?= $index + 1 ?></th>
                    <td><?= $user["first_name"] ?></td>
                    <td><?= $user["last_name"] ?></td>
                    <td><?= $user["email"] ?></td>
                    <td><?= implode(" - ", unserialize($user["statuts"])) ?></td>
                    <td class="text-center"><?= $user['nbre_taches'] ?></td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" data-host="<?= HOST_URL ?>" onchange="activerUtilisateur(this, <?= $user['id'] ?>)" type="checkbox" name="activer_user_<?= $user['id'] ?>" id="id_activer_user_<?= $user['id'] ?>" <?php  if ($_SESSION['user']['id'] == $user["id"]) { echo "checked disabled"; } else { if ($user["activated"] == 1) { echo "checked"; } } ?> />
                        </div>
                    </td>
                    <td class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="<?= $user['isconnected'] == 'Disconnected' ? '#961320' : 'green' ?>" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"></circle>
                        </svg>
                    </td>
                    <td>
                        <a href="index.php?page=user_edit&user_id=<?= $user["id"] ?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>

                    <!-- Supprimer User -->
                    <td>
                        <a href="#" onclick="supprimerUser('<?= HOST_URL ?>', <?= $user['id'] ?>)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f05463" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                            </svg>
                        </a>
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </main>

<?php include_once(__DIR__ . '/../partials/footer.php'); ?>