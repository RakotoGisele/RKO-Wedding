<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    
    <link rel="stylesheet" href="style_tdb.css">
    
    <title>Tableau de bord - RKO WEDDING</title>
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
<div class="">
  <div class="col table-responsive">
    <table class="table">
    <h1 class="titre">Mes prestations</h1>
            <thead>
                <tr>
                    <td>Titre</td>
                    <td>Description</td>
                    <td>Image</td>
                    <td>Actions</td> 
                </tr>
            </thead>
            <tbody>
            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "rkowedding");
 $link -> set_charset("utf8");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM ajout_prestation";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
            
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['titre'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td class=\"align-middle\"><img class=\"thumbnail\"src=\"" . $row['image'] . "\" height='80px'\"\" width='100px'\"\">\n</td>";
                echo '<td><a class="btn btn-primary" type="submit" name="modifier" value="modifier" href="modifier.php?id='. $row['id'] .'" >modifier</a></td>';
                echo '<td><a class="btn btn-danger" type="submit" name="supprimer" value="supprimer" href="supprimer_prestation.php?id='. $row['id'] .'" >supprimer</a></td>';
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Aucunes données ajoutés.";
    }
} else{
    echo "ERROR: Impossible d'éxécuter $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
</tbody>
    </table>
  </div>
  <div class="col table-responsive">
  <table class="table">
  <h1 class="titre">Mes coffrets</h1>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "rkowedding");
 $link -> set_charset("utf8");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM ajout_coffret";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
            
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['titre'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td class=\"align-middle\"><img class=\"thumbnail\"src=\"" . $row['image'] . "\" height='80px'\"\" width='100px'\"\">\n</td>";
                echo '<td><a class="btn btn-primary" type="submit" name="modifier" value="modifier" href="modifier.php?id='. $row['id'] .'" >modifier</a></td>';
                echo '<td><a class="btn btn-danger" type="submit" name="supprimer" value="supprimer" href="supprimer_coffret.php?id='. $row['id'] .'" >supprimer</a></td>';
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Aucunes données ajoutés.";
    }
} else{
    echo "ERROR: Impossible d'éxécuter $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
            </tbody>
    </table>
  </div>
  <div class="col table-responsive">
  <table class="table">
  <h1 class="titre">Galerie</h1>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "rkowedding");
 $link -> set_charset("utf8");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM ajout_photo";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
            
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['titre'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td class=\"align-middle\"><img class=\"thumbnail\"src=\"" . $row['image'] . "\" height='80px'\"\" width='100px'\"\">\n</td>";
                echo '<td><a class="btn btn-primary" type="submit" name="modifier" value="modifier" href="modifier.php?id='. $row['id'] .'" >modifier</a></td>';
                echo '<td><a class="btn btn-danger" type="submit" name="supprimer" value="supprimer" href="supprimer_photo.php?id='. $row['id'] .'" >supprimer</a></td>';
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Aucunes données ajoutés.";
    }
} else{
    echo "ERROR: Impossible d'éxécuter $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
        </tbody>
    </table>
  </div>
</div>


</body>
</html>

