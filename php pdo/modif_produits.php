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
            <li class="nav-item"> <a class="nav-link" href="liste.php">Accueil<span class="sr-only">(current)</span> </a></li>
            <li class="nav-item"> <a class="nav-link" href="liste.php">Tableau <span class="sr-only">(current)</span> </a></li>
            <li class="nav-item"> <a class="nav-link" href="contact.html">Contact<span class="sr-only">(current)</span></a></li>
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

       <div class="table-responsive-sm"></div>
       <div>
    <table   class="col-12"></table>
    
        <?php    
        require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions

        $db = connexionBase(); // Appel de la fonction deconnexion
        $pro_id = $_GET["pro_id"];
        
        $requete = "SELECT * FROM produits join categories on produits.`pro_cat_id` = categories.cat_id WHERE pro_id =$pro_id";
       

        $result = $db->query($requete);
        
 // Renvoi de l'enregistrement sous forme d'un objet
$produit = $result->fetch(PDO::FETCH_OBJ);


  

 ?>
      
      
      



       

       </head>
       <body> 
       <form  method="POST" action="fonction_valide.php">
      
       <div class=form-group >
        <label>Référence</label>
        <input type=text class=form-control id=ref class=invalid-feedback name=reference   value="<?php echo $produit->pro_ref;?> ">
        </div>


                                                     <!--AJOUT CATEGORIE-->

                                                     <div class=form-group >
        
        <!--<input type=text class=form-control id=categorie class=invalid-feedback name=categorie >-->

       
                 <!--   <option >Veuillez sélectionner une catégorie</option> >-->

                    <?php 
                    echo '<label>Catégorie</label>';
                    echo '<select class="custom-select mr-sm-2" id="categorie" name="categorie">';
                    $sql =$db->prepare('SELECT cat_nom, cat_id FROM categories ORDER BY cat_id ASC');
                    $sql->execute();
                    //$result = $sql->fetch(PDO::FETCH_OBJ);
                    while ($result = $sql->fetch())

                    
{
    echo '<option name="cat" value="' .$result['cat_id'].'">' .$result['cat_nom']. '</option>'; 
} 
                    echo '<option name="cat" value="' .$produit->cat_id.'">' .$produit->cat_nom. '</option>';
                    echo'</select>';

           ?>


                                                             <!--FIN CATEGORIE-->




        <div class=form-group >
        <label>Libellé</label>
        <input type=text class=form-control id=libelle class=invalid-feedback name=libelle  value=" <?php echo $produit->pro_libelle;?>" >
        </div>
      

        <div class="form-group">
         <label for="comment">Description :</label>
         <input class="form-control" rows="2" id="description" name="descri" class="invalid-feedback"    value="<?php  echo $produit->pro_description;?>">
         </div>

        <div class=form-group >
        <label>Prix</label>
        <input type=text class=form-control id=prix class=invalid-feedback name=prix    value=" <?php echo $produit ->pro_prix; ?> ">
        </div>

        <div class=form-group >
        <label>Stock</label>
        <input type=text class=form-control id=stock class=invalid-feedback name=stock    value=" <?php echo $produit ->pro_stock; ?>">
        </div>


        <div class=form-group >
        <label>Couleur</label>
        <input type=text class=form-control id=couleur class=invalid-feedback name=couleur     value=" <?php echo $produit ->pro_couleur; ?> ">
        </div>


        
       <div class=form-group>
       <input type="file" name="fileToUpload" id="fileToUpload">
        
        </div> 

  <label> Produit bloqué </label>
  <div class=bouton>
       <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label >Oui</label>
        </div>
        <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
         <label>Non</label>
       </div>
 </div>


 <div class=form-group >
        <label>Date d'ajout</label>
        <input type=text class=form-control id=datea class=invalid-feedback name=ajout  value=" <?php echo $produit ->pro_d_ajout; ?> ">
        </div>


        
        <button type="submit" value=<?php echo $pro_id?>  name='pro_id'id= 'pro_id'class="btn btn-dark">Valider</button>
        
      
      </form>
       
        
       
     



       
       
      
     
     








      

       <footer  class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav ">
                <li><a class="nav-link active" href="#">Mention légales</a></li>
                <li><a class="nav-link" href="#">Horaires</a></li>
                <li><a class="nav-link" href="#">Plan du site</a></li>
            </ul>
                
        </footer>

       </body>
     </html>