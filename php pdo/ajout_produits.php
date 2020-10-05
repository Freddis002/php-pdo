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



       
    <table class="col-12">
    
      

       </head>
       <body> 
       
      <form action="fonction_update.php" method="post" enctype="multipart/form-data">

       <div class=form-group >
        <label>Référence</label>
        <input type=text class=form-control id=reference class=invalid-feedback name=reference >
        </div>



                                                     <!--AJOUT CATEGORIE-->

        <div class=form-group >
        <label>Catégorie</label>
        <!--<input type=text class=form-control id=categorie class=invalid-feedback name=categorie >-->

        <select class="custom-select mr-sm-2" id="categorie" name="categorie">
                 <!--   <option >Veuillez sélectionner une catégorie</option> >-->

                    <?php 

                                        require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
                                        $db = connexionBase();

                                        $sql =$db->prepare('SELECT cat_nom, cat_id FROM categories ORDER BY cat_id ASC');
                                        $sql->execute();
                                        //$result = $sql->fetch(PDO::FETCH_OBJ);
                                        while ($result = $sql->fetch())

                                        
                {
                        echo '<option name="cat" value="' .$result['cat_id'].'">' .$result['cat_nom']. '</option>'; 
                } 
                                ?>


                                                             <!--FIN CATEGORIE-->





        </select>
        </div>



        <div class=form-group >
        <label>Libellé</label>
        <input type=text class=form-control id=libelle class=invalid-feedback name=libelle >
        </div>
      

        <div class="form-group">
         <label for="comment">Description :</label>
         <input class="form-control" rows="2" id="descri" name="descri" class="invalid-feedback" >
         </div>

        <div class=form-group >
        <label>Prix</label>
        <input type=text class=form-control id=prix class=invalid-feedback name=prix> 
        </div>

        <div class=form-group >
        <label>Stock</label>
        <input type=text class=form-control id=stock class=invalid-feedback name=stock>
        </div>


        <div class=form-group >
        <label>Couleur</label>
        <input type=text class=form-control id=couleur class=invalid-feedback name=couleur >
        </div>



                                        <!--DEBUT UPLOAD IMAGE-->

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
        <input type=text class=form-control id=datea class=invalid-feedback name=datea>  
        </div>


       

      
      
       
     
       
       <button   type="submit" name="submit" class="btn btn-dark"><title="Ajout_produits">Ajout Produits</button>

       </form>

       
       
      
     







</table>

      

       <footer  class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav ">
                <li><a class="nav-link active" href="#">Mention légales</a></li>
                <li><a class="nav-link" href="#">Horaires</a></li>
                <li><a class="nav-link" href="#">Plan du site</a></li>
            </ul>
                
        </footer>

       </body>
     </html>