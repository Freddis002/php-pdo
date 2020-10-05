<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jarditou</title>
    <link rel="stylesheet" href="../css/index.css" />
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div  class="collapse navbar-collapse" id="navbarSupportedContent" ></div>
        
    <header>

        
       
            
        <div>
            <img src="images/jarditou_logo.jpg" style="margin-left: 10px;"width="400" height="100" class="img-fluid" alt="Responsive image">
            
        </div>
            
        <div class="container" ></div>


        
        </header>
         
   
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"  >
               
                <span class="navbar-toggler-icon"></span>
                </button>     
                
                <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
        <ul class="navbar-nav mr-auto ">
            <li class="navbar"> <a class="navbar" ></a>Jarditou.com</li>
            <li class="nav-item"> <a class="nav-link" href="index1.php">Accueil<span class="sr-only">(current)</span> </a></li>
            <li class="nav-item"> <a class="nav-link" href="liste.php">Tableau <span class="sr-only">(current)</span> </a></li>
            <li class="nav-item"> <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a></li>
        </ul>
        

    </div>
        
        <div class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Votre promotion">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>

</div>
        </nav>
        <section>
       <img src="images/promotion.jpg"class="img-fluid w-100" alt="Responsive image"> 
       </section> 
        <div>
       <div class="table-responsive"></div>
       
 
    


   <?php
    
    require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase(); // Appel de la fonction de connexion
    $requete = "SELECT * FROM produits WHERE ISNULL(pro_bloque) ORDER BY pro_d_ajout DESC";
    
    $result = $db->query($requete);
    
   

    if (!$result) 
    {
        $tableauErreurs = $db->errorInfo();
        echo $tableauErreur[2]; 
        die("Erreur dans la requête");
    }

    if ($result->rowCount() == 0) 
    {
       // Pas d'enregistrement
       die("La table est vide");
    }

    echo '<tbody>';
    echo '<table class=table table-striped col-md-4 col-md-4 >';
    echo '<thead class=thead-light>';

    
    echo '<th >Photos</th>';
    echo '<th>ID</th>';
    echo '<th>Référence</th>';
    echo '<th>Libellé</th>';
    echo '<th>Prix</th>';
   echo '<th>Stock</th>';
   echo '<th> Couleur</th>';
   echo '<th>Ajout</th>';
   echo '<th>Modif</th>';
   echo '<th>Bloqué</th>';

    echo'</tr>';


    while ($produit = $result->fetch(PDO::FETCH_OBJ))
    
    {
        
        echo"<tr class=table>";
        
        echo"<th class=col-md-2 col-md-2  value=$produit->pro_id > <img src=jarditou_photos\\$produit->pro_id.$produit->pro_photo  width= '150px' height='100px'> </th>";
        echo"<th>".$produit->pro_id ."</th>";
        echo"<th >".$produit->pro_ref ."</th>";
        echo '<th><a href="detail.php?pro_id='.$produit->pro_id.'" title='.$produit->pro_libelle.'>'.$produit->pro_libelle.'</a></th>';
        echo "<th>" .$produit->pro_prix."</th>";
        echo "<th>".$produit->pro_stock. "</th>";
        echo "<th>".$produit ->pro_couleur."</th>";
        echo "<th>" .$produit ->pro_d_ajout. "</th>";
        echo "<th>".$produit ->pro_d_modif. "</th>"; 
        echo "<th>".$produit ->pro_bloque. "</th>";

        echo"</tr>";
    }

    echo "</table>"; 
    echo '</tbody>';
    ?>



<?php
if (isset($_SESSION['us_mail'])){
}
else{
    
}?>
<a href=ajout_produits.php?pro_id   type="button" class="btn btn-dark"><title="Ajout_produits">Ajout Produits</a>



</div>



<footer  class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav ">
                <li><a class="nav-link active" href="#">Mention légales</a></li>
                <li><a class="nav-link" href="#">Horaires</a></li>
                <li><a class="nav-link" href="#">Plan du site</a></li>
            </ul>
                
        </footer>







    </body>
    </html> 