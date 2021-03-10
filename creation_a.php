<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CDN BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

    <!--Police de caractère - google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style_a.css">

    <title>Création de compte | RKOWedding</title>
</head>
<body>
    <div class="formulaire">
        <form method="POST" action="">
        <div class="logo">
            <img src="RKO Weddingnew logo 2021.png" alt="logo RKO Wedding" width="200px">
        </div>
        <form method="POST" action="">
            <div class="champ_formulaire d-flex justify-content-center">
                <div class="form-floating mb-3 w-75">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Identifiant">
                    <label for="floatingInput">Identifiant</label>
                </div>
            </div>
            <div class="champ_formulaire d-flex justify-content-center" style="width=100px">
                <div class="form-floating mb-3 w-75">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Mot de passe">
                    <label for="floatingPassword">Mot de passe</label>
                </div>
            </div>
            <div class="champ_formulaire d-flex justify-content-center">
                <div class="form-floating mb-3 w-75">
                    <input type="password" class="form-control" id="floatingPassword_confirm"
                        placeholder="Confirmer le mot de passe">
                    <label for="floatingPassword">Confirmer le mot de passe</label>
                </div>
            </div>
            <button type="button" class="btn btn-info">Valider</button>
            <p>Vous avez déjà un compte ? <a href="connexion.php">CONNEXION</a></p>
        </form>
    </div>
</body>
</html>