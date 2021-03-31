<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "admin", "Simplon974", "rkowedding");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$titre = mysqli_real_escape_string($link, $_REQUEST['titre']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
$image = mysqli_real_escape_string($link, $_REQUEST['image']);
 
// attempt insert query execution
$sql = "INSERT INTO ajout (id, titre, description, image) VALUES (NULL, '$titre', '$description', '$image')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>