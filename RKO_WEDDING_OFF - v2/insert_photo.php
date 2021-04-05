<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "rkowedding");
 
$link -> set_charset("utf8");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$titre = mysqli_real_escape_string($link, $_REQUEST['titre']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
$image = mysqli_real_escape_string($link, $_REQUEST['image']);
 
// attempt insert query execution
$sql = "INSERT INTO ajout_photo (titre, description, image) VALUES ('$titre', '$description', '$image')";
if(mysqli_query($link, $sql)){
    echo "Photographie ajouté avec succès. <a href='tdb.php'>Afficher le tableau de bord</a>";
    header('location:tdb.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>