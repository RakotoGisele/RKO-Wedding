<?php  

//en appuyant sur le bouton ajouter cela rafraichit la page 
//(+ bloque le renvoie des données saisie avant en rafraichissant la page

if (isset($_POST['valider'])) {
    header('location:connexion1.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style1a.css">

    <!--Police de caractère - google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">

    <!--CDN BULMA-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <!--CDN BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>Création de compte | RKO Wedding</title>
</head>

<body>
    <div class="columns is-12">
        <div class="column is-8">
            <img class="image_accueil" src="image - accueil.jpg" alt="">
        </div>
        <div class="column is-one-third"">
            <div class=" formulaire">
            <p class="intro">
                Organisatrice <br> d'évènements
            </p>
                <div classs="logo">
                    <img src="RKO Weddingnew logo 2021.png" alt="Logo RKO Wedding" width="200px">
                </div>
                <form method="POST" action="">
                    <div class="form-floating mb-3 mt-3 w-50">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        <label for="floatingInput">Adresse e-mail</label>
                    </div>
                    <div class="form-floating mb-3 w-50">
                        <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" placeholder="Mot de passe">
                        <label for="floatingPassword">Mot de passe</label>
                    </div>
                    <div class="valider mb-3">
                        <button id="valider" name="valider" type="button" class="btn btn-success">Valider</button>
                    </div>
                    
                </form>
            </div>
            
        </div>
        </div>
    <script src=" https://kit.fontawesome.com/a3be9883af.js" crossorigin="anonymous">
    </script>
</body>

</html>

<?php  

    //connexion à la base de données
    $bdd = new PDO('mysql:host=localhost; dbname=rkowedding;charset=utf8', 'admin', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    //Insertion de données
    $reponse = $bdd->query('SELECT * FROM connexion');
        if (isset($_POST['email']) && isset($_POST['mot_de_passe']) && isset($_POST['confirmer'])) {
        $requete = 'INSERT INTO connexion VALUES (NULL,"'. $_POST['email'] .'","'. $_POST['mot_de_passe'] .'","'. $_POST['confirmer'] .'")';
        $resultat = $bdd->query($requete);
}

?>