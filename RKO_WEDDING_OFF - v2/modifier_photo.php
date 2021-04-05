<?php 
$id=$_GET['id'];
 $bdd = new PDO('mysql:host=127.0.0.1;dbname=rkowedding;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
if (isset($_POST['modifier_photo'])) {


$requete = 'UPDATE ajout_photo SET titre="' . $_POST['titre'] . '", description="' . $_POST['description'] . '",image="' . $_POST['image'] . '" WHERE id="' . $id . '"';
$resultat = $bdd->query($requete);
header('location:tdb.php');
}
?>