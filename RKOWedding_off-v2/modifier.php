<?php 
$id=$_GET['id'];
 $bdd = new PDO('mysql:host=127.0.0.1;dbname=rkowedding;charset=utf8', 'admin', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
if (isset($_POST['modifier'])) {


$requete = 'UPDATE ajout_prestation SET titre="' . $_POST['titre'] . '", description="' . $_POST['description'] . '",image="' . $_POST['image'] . '" WHERE id="' . $id . '"';
$resultat = $bdd->query($requete);
header('location:tdb.php');
}
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>Document</title>
</head>
<body>
<div class="cards">
        <div class="card">
            <h3 class="titre1 mb-4">Ajouter une Prestation</h3>
            <form method="post">
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
                <input class="btn_ajouter btn" type="submit" name="modifier" value="modifier">
            </form>
        </div>
</body>
</html>