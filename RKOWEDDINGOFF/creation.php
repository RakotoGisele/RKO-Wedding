<?php
// initialiser la session
session_start();
 
// Vérifie si l'utilisateur est déjà connecté, si oui il est redirigé vers la page d'accueil
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: accueil.php");
    exit;
}

// Lie le fichier config.php
require_once "config.php";
 
// Définit des variables et les initialise avec des valeurs vides
$email = $username = $password = $confirm_password = "";
$email_err = $username_err = $password_err = $confirm_password_err = "";
 
// Traitement des données du formulaire lorsque celui-ci est soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Valide l'email
    if(empty(trim($_POST["email"]))){
        $email_err = "Veuillez entrer un email.";
    } else{
        // Préparation de la déclaration de sélection
        $sql = "SELECT id FROM creation_admin WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Lie des variables à l'instruction préparée en tant que paramètres
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Définit les paramètres
            $param_email = trim($_POST["email"]);
            
            // Tentative d'exécution de l'instruction préparée
            if(mysqli_stmt_execute($stmt)){
                /* résultat */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "Cet email est déjà pris.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Ferme la déclaration
            mysqli_stmt_close($stmt);
        }
    }

    // Valide le nom d'utilisateur
    if(empty(trim($_POST["username"]))){
        $username_err = "Entrez un identifiant s'il vous plaît.";
    } else{
        // Préparation de la déclaration de sélection
        $sql = "SELECT id FROM creation_admin WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Lie des variables à l'instruction préparée en tant que paramètres
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Définit les paramètres
            $param_username = trim($_POST["username"]);
            
            // Tentative d'exécution de l'instruction préparée
            if(mysqli_stmt_execute($stmt)){
                /* résultat */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Cet identifiant est déjà pris.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Ferme la déclaration
            mysqli_stmt_close($stmt);
        }
    }
    
    // Valide le mot de passe
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Valide la confirmation de mot de passe
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Veuillez confirmer le mot de passe.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Vérifie les erreurs de saisie avant de les insérer dans la base de données
    if(empty($email_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare une instruction d'insertion
        $sql = "INSERT INTO creation_admin (email, username, password) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Lie des variables à l'instruction préparée en tant que paramètres
            mysqli_stmt_bind_param($stmt, "sss", $param_email, $param_username, $param_password);
            
            // définit les paramètres
            $param_email = $email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Crée un hachage de mot de passe
            echo $param_email. $param_username. $param_password;
            // Tentative d'exécuter l'instruction préparée
            if(mysqli_stmt_execute($stmt)){
                // redirige vers la page de connexion 
                header("location: connexion.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // ferme la déclaration
            mysqli_stmt_close($stmt);
        }
    }
    
    // ferme la connexion
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CDN Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!--CDN Bulma-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <!-- Police google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Judson:ital@1&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="style1.css">

    <title>Création de compte - RKO WEDDING</title>
</head>
<body>
    <h1 class="titre">
        Organisatrice <br> d'évènements
    </h1>
    <div class="formulaire">
        <div classs="logo">
            <h1 class="titre1">Inscription</h1>
        </div>
        <!--htmlspecialchars Convertit les caractères spéciaux en entités HTML-->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="champ form-floating mb-3">
            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
                <label for="floatingInput">Adresse e-mail</label>
            </div>
            <br>
            <div class="champ form-floating mb-3 mt-3">
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                <label for="floatingInput">Identifiant</label>
            </div>
            <br>
            <div class="champ form-floating mb-3 mt-3">
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                 <label for="floatingPassword">Mot de passe</label>
            </div>
            <br>
            <div class="champ form-floating mb-3 mt-3">
            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                 <label for="floatingPassword">Confirmation du mot de passe</label>
            </div>
            <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="valider">
            </div>
            <p>Vous avez déjà un compte ? <a href="connexion.php">Connectez vous ici</a>.</p>
        </form>
    </div>
</body>
</html>
