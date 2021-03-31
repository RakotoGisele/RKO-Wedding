<?php

//en appuyant sur le bouton ajouter cela rafraichit la page 
//(+ bloque le renvoie des données saisie avant en rafraichissant la page

if (isset($_POST['ajouter'])) {
    header('location:tdb.php');
}

// Lie le fichier config.php
require_once "insert.php";

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
            <a class="navbar-brand" href="accueil_off.php"><img src="RKO Weddingnew logo 2021.png" alt="logo" width="80"
                    height="68" class="d-inline-block align-text-top"></a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="accueil_off.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tdb.php">Tableau de bord</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1 class="titre">RKO WEDDING</h1>
    <div class="cards">
        <div class="card">
            <h3 class="titre1 mb-4">Ajouter une Prestation</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                <input type="text" name="titre" id="titre" placeholder="Veuillez entrer un titre" class="form-control mt-2">
                <textarea class="form-control mt-2" name="description" id="description" placeholder="Veuillez entrer une description" rows="3"></textarea>
                <label for="image">Ajouter une image</label>
                <input class="mt-2" type="file" name="image" id="image">
                <input class="btn_ajouter btn mt-3" type="submit" name="ajouter" id="ajouter" value="Ajouter">
            </form>
        </div>

        <div class="card">
            <h3 class="titre1 mb-4">Ajouter un Coffret</h3>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                <input type="text" name="titre" id="titre" placeholder="Veuillez entrer un titre" class="form-control mt-2">
                <textarea class="form-control mt-2" name="description" id="description" placeholder="Veuillez entrer une description" rows="3"></textarea>
                <input class="mt-2" type="file" name="image" id="image">
                <input class="btn_ajouter btn mt-3" type="submit" name="ajouter" id="ajouter" value="Ajouter">
            </form>
        </div>

        <div class="card">
            <h3 class="titre1 mb-4">Ajouter une Photographie</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                <input type="text" name="titre" id="titre" placeholder="Veuillez entrer un titre" class="form-control mt-2">
                <textarea class="form-control mt-2" name="description" id="description" placeholder="Veuillez entrer une description" rows="3"></textarea>
                <input class="mt-2" type="file" name="image" id="image">
                <input class="btn_ajouter btn mt-3" type="submit" name="ajouter" id="ajouter" value="Ajouter">
            </form>
        </div>

    </div>

</body>

</html>
<?php  
//connexion base de données
$bdd = new PDO('mysql:host=localhost;dbname=rkowedding;charset=utf8', 'admin', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//insertion de données dans la base de données
$reponse = $bdd->query('SELECT * FROM ajout');
if (isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['image'])) {
    $bdd = 'INSERT INTO ajout VALUES (NULL,"'. $_POST['titre'] .'","'. $_POST['description'] .'", ,"'. $_POST['image'] .'")';
    
$resultat = $bdd->query($requete);
}
?>