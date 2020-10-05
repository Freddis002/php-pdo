<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jarditou</title>
    <link rel="stylesheet" href="../css/index.css" />
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div  class="collapse navbar-collapse" id="navbarSupportedContent" ></div>

    <header>
        <div>
        <img src="images/jarditou_logo.jpg"   class="img-fluid" alt="logo_jarditou"    width="400" height="100">
       
        </div>
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
    

    
    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Votre promotion">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>

    </nav>

    <section>
        <img src="images/promotion.jpg" class="img-fluid w-100" alt="Responsive image"  >
        </section>





        


</p>*Ces zones sont obligatoires</p>

<form  class="container col-12"   method="POST" action="script.php"  id="formulaire" onsubmit="return checkform()" >
    <div class="form-group">


<legend>Vos coordonnées </legend>
<div class="form-group ">
    <label>Nom *</label>
    <input type="text" class="form-control" id="nom" class="invalid-feedback" name="nom"  placeholder="Veuillez saisir votre nom" >
    <span id="enom"></span>
    

    <div class="form-group ">
        <label>Prénom *</label>
        <input type="text" class="form-control" id="prenom" name="prenom" class="invalid-feedback"  placeholder="Veuillez saisir votre prénom" >
        <span id="eprenom"></span>
        

<label>Sexe</label>
<div class=boutonh>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label >Homme</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label>Femme</label>
  </div>
 </div>
         
 <label>Date de naissance</label>
 <input id="datepicker"/>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

<div class="form-group ">
    <label>Code postal</label>
    <input type="text" class="form-control" id="codePostal"   name="codePostal" class="invalid-feedback" >
    



    <div class="form-group ">
        <label>Adresse</label>
        <input type="text" class="form-control"   id="adresse" name="adresse" class="invalid-feedback" >
        


<div class="form-group ">
        <label>Ville</label>
        <input type="text" class="form-control" id="ville"  name="ville"   class="invalid-feedback"  >
        

        <div class="form-group ">
            <label>Email*</label>
            <input type="email"  placeholder="dave.loper@afpa.fr" class="form-control" id="email"   name="email"    class="invalid-feedback"  >
            <span id="eemail"></span>
            



<legend> Votre demande</legend>

<div class="form-group">
    <label>Sujet</label>
 <select class="custom-select custom-select-sm">
    
    <option selected>Veuillez sélectionner un sujet</option>
    <option value="Mes commandes">Mes commandes</option>
    <option value="Question sur un produits">Question sur un produits</option>
    <option value="Réclamation">Réclamation</option>
    <option value="Autres">Autres</option>
</select>
</div>


<div class="form-group"> <label for="comment">Votre question* :</label> <textarea class="form-control" rows="2" id="question" name="question" class="invalid-feedback" ></textarea> </div>
<span id="equestion"></span>
</fieldset>

 



    <input type="checkbox"> J'accepte le traitement informatique de ce formulaire.
    
    
<div class="form-group">
 
<input type="submit" type="button" class="btn btn-dark" value="Envoyer" id='bouton_envoi'>
<input type="reset"  type="button" class="btn btn-dark" value="Annuler">
</div>

</div>
</form>


        
        <footer  class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav ">
                <li><a class="nav-link active" href="#">Mention légales</a></li>
                <li><a class="nav-link" href="#">Horaires</a></li>
                <li><a class="nav-link" href="#">Plan du site</a></li>
            </ul>
                
        </footer>





<script src="formulaire.js"></script>







<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html>