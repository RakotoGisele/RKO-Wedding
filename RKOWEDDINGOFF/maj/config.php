<?php
/* Informations d'identification à la base de données. En supposant que vous exécutez MySQL
serveur avec paramètre par défaut (utilisateur 'root' sans mot de passe) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'Simplon974');
define('DB_NAME', 'rkowedding');
 
/* tentative de connexion à la base de données MySql */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifie la connexion 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>