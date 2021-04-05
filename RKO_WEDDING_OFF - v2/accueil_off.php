<?php 
// Include config file
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CDN Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

    <!-- Police google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Judson:ital@1&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="style_accueil_off.css">

    <title>Accueil administrateur - RKO WEDDING</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="accueil_off.php">
                <img src="RKO Weddingnew logo 2021.png" alt="logo" width="80" height="68" class="d-inline-block align-text-top"></a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="accueil_off.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tdb.php">Tableau de bord</a>
                </li>
            </ul>
        </div>
        <a href="connexion.php">
        <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>
</a>
    </nav>
    <h1 class="titre">RKO WEDDING</h1>
    <div class="cards">
        <div class="card">
            <h3 class="titre1 mb-4">Ajouter une Prestation</h3>
            <form action="insert_prestation.php" method="post">
                <div class="form-group m-2">
                    <label>Titre</label>
                    <!-- required permet d'empêcher l'envoi du formulaire si le champ est vide -->
                    <input class="form-control" type="text" name="titre" placeholder="Veuillez entrer un titre" required>
                    <span class="help-block"></span>
                </div>
                <div class="form-group m-2">
                    <label>Description</label>
                    <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
                    <span class="help-block"></span>
                </div>
                <div class="form-group m-2">
                    <label>Ajouter une image</label>
                    <!-- required permet d'empêcher l'envoi du formulaire si le champ est vide -->
                    <input class="form-control" type="text" name="image" placeholder="Veuillez entrer le lien zupimages" required>
                    <span class="help-block">Tips : Héberger votre image sur <a href="https://www.zupimages.net/up.php">zupimages.net</a></span>
                </div>
                <input class="btn_ajouter btn" type="submit" name="ajouter_prestation" value="Ajouter une prestation">
            </form>
        </div>

        <div class="card">
            <h3 class="titre1 mb-4">Ajouter un Coffret</h3>
            <form action="insert_coffret.php" method="post">
                <div class="form-group m-2">
                    <label>Titre</label>
                    <!-- required permet d'empêcher l'envoi du formulaire si le champ est vide -->
                    <input class="form-control" type="text" name="titre" placeholder="Veuillez entrer un titre" required>
                    <span class="help-block"></span>
                </div>
                <div class="form-group m-2">
                    <label>Description</label>
                    <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
                    <span class="help-block"></span>
                </div>
                <div class="form-group m-2">
                    <label>Ajouter une image</label>
                    <!-- required permet d'empêcher l'envoi du formulaire si le champ est vide -->
                    <input class="form-control" type="text" name="image" placeholder="Veuillez entrer une url" required>
                    <span class="help-block">Tips : Héberger votre image sur <a href="https://www.zupimages.net/up.php">zupimages.net</a></span>
                </div>
                <input class="btn_ajouter btn " type="submit" name="ajouter_coffret" value="Ajouter un coffret">
            </form>
        </div>

        <div class="card">
            <h3 class="titre1 mb-4">Ajouter une Photographie</h3>
            <form action="insert_photo.php" method="post">
                <div class="form-group m-2">
                    <label>Titre</label>
                    <!-- required permet d'empêcher l'envoi du formulaire si le champ est vide -->
                    <input class="form-control" type="text" name="titre" placeholder="Veuillez entrer un titre" required>
                    <span class="help-block"></span>
                </div>
                <div class="form-group m-2">
                    <label>Description</label>
                    <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
                    <span class="help-block"></span>
                </div>
                <div class="form-group m-2">
                    <label>Ajouter une photographie</label>
                    <!-- required permet d'empêcher l'envoi du formulaire si le champ est vide -->
                    <input class="form-control" type="text" name="image" placeholder="Veuillez entrer une url" required>
                    <span class="help-block">Tips : Héberger votre image sur <a href="https://www.zupimages.net/up.php">zupimages.net</a></span>
                </div>
                <input class="btn_ajouter btn " type="submit" name="ajouter_photo" value="Ajouter une photographie">
            </form>
        </div>

    </div>

</body>

</html>

