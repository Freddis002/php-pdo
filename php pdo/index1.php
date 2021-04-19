
 <?php
//session_start();

//if ($_SESSION["us_mail"]) 
//{
 //  echo"Vous êtes autorisé à voir cette page.";  
//} 
//else 
//{
 //  echo"Cette page nécessite une identification.";  
//}

?>










<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jarditou</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../php pdo/style.css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div  class="collapse navbar-collapse" id="navbarSupportedContent" ></div>

   
        
    <header>
    
        
       
            
        <div>
        <img src="images/jarditou_logo.jpg" style="margin-left: 10px;"width="400" height="100" class="img-fluid" alt="Responsive image">
            
        </div>
            
        <div class="container" >


        
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
        
    <div>
    <button type="button" class="btn btn-secondary"><a href="inscription.php" >Inscription</button></a>
    <button type="button" class="btn btn-secondary" id="myBtn"><a href="#" >Connexion</button></a>
 
     <!-- Modal -->
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Connexion</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="usrname" placeholder="Entrer votre adresse mail">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mot de passe</label>
              <input type="text" class="form-control" id="psw" placeholder="Entrer votre mot de passe">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Se souvenir de moi</label>
              
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Validé</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Retour</button>
          <p>Vous n'etes pas encore membre? <a href="#">S'inscrire</a></p>
          <p>Vous avez oublié le sésame ? <a href="#">Nouveau Mot de passe?</a></p>
        </div>
      </div>
</div>
</div>
    </div>
    

    
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Votre promotion">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>




        </form>
        </nav>
        <section>
       <img src="images/promotion.jpg"class="img-fluid w-100" alt="Responsive image"> 
       </section>



    
     
       


            <div class="row mx-auto">
            <div class="col-6 col-lg-6">
        <h1>Accueil</h1>

       <p><strong>L'entreprise</strong></p>

        <p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
        <p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
        <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie</p>

        <p><strong>Qualité</strong></p>

        <p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre projet.</p>    
        <p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>

        <p>  <strong>Devis gratuit</strong></p>
        <p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention. Vous souhaitez un devis ? Nous vous le réalisons gratuitement.</p>
             </div>
    
    <div class="col-6 col-lg-6 bg-warning">
        <h2 >[Colonne de droite]</h2>

            </div>
  </div>
            

        
        

<footer  class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav ">
        <li><a class="nav-link active" href="#">Mention légales</a></li>
        <li><a class="nav-link" href="#">Horaires</a></li>
        <li><a class="nav-link" href="#">Plan du site</a></li>
    </ul>
        
</footer>

    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="popup.js"></script>

</div>
</body>
</html>