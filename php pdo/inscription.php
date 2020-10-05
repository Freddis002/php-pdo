



<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jarditou</title>
    <link rel="stylesheet" href="../css/index.css" />
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div  class="collapse navbar-collapse" id="navbarSupportedContent" ></div>
    
        
    <header>
    
        
       
            
        <div>
        <img src="images/jarditou_logo.jpg" style="margin-left: 10px;"width="200" height="200" class="img-fluid" alt="Responsive image">
            
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
        
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Votre promotion">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>

        </form>
        </nav>
        <section>
			<img src="images/promotion.jpg"class="img-fluid w-100" alt="Responsive image"> 
       </section>





<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">



<?php
 if (isset($_SESSION['us_mail'])){
    ?>
    <a href="./php/inscription.php" class="btn btn-danger">Deconnexion</a>
    <?php
}

    ?>





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center"></h4>
	

	
<form type="submit" name="envoyer" value="envoyer">

 
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Nom" type="text">
	</div> <!-- form-group// -->
	

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Prénom" type="text">
	</div>

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Login" type="text">
	</div> <!-- form-group// -->
	

	
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
		 
        <input name="" class="form-control" placeholder="Adresse mail" type="email">
	</div> <!-- form-group// -->
	

    
	
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
	
   
        <input class="form-control" placeholder="Création du mot de passe" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Répété le mot de passe" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Créer votre compte  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Vous avez deja un compte? <a href="">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->



<footer  class="navbar navbar-expand-lg navbar-dark bg-dark">
	<ul class="navbar-nav ">
		<li><a class="nav-link active" href="#">Mention légales</a></li>
		<li><a class="nav-link" href="#">Horaires</a></li>
		<li><a class="nav-link" href="#">Plan du site</a></li>
	</ul>
		
</footer>



<?php
//session_start();
require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
$reg = connexionBase();


@$us_id=$_POST["id"];
@$us_nom=$_POST["nom"];
@$us_prenom=$_POST["prenom"];
@$us_mail=$_POST["mail"];
@$us_login=$_POST["login"];
@$us_mdp=$_POST["mdp"];
@$us_dateinscri=$_POST["inscription"];
@$us_derco=$_POST["connexion"];
//@$password_hash = password_hash("vacances", PASSWORD_DEFAULT);




$sql ="INSERT INTO  users (us_id,us_nom,us_prenom,us_mail,us_login,us_mdp,us_dateinscri,us_derco) VALUES (:id ,:nom, :prenom, :mail,:login,:mdp,:inscription,:connexion)";


$stmt = $reg->prepare($sql);

$stmt->bindValue(":id",$us_id ,PDO::PARAM_STR);
$stmt->bindValue(":nom",$us_nom,PDO::PARAM_STR);
$stmt->bindValue(":prenom",$us_prenom,PDO::PARAM_STR);
$stmt->bindValue(":mail",$us_mail,PDO::PARAM_STR);
$stmt->bindValue(":login",$us_login,PDO::PARAM_STR);
$stmt->bindValue(":mdp",$us_mdp,PDO::PARAM_STR);
$stmt->bindValue(":inscription",$us_dateinscri,PDO::PARAM_STR);
$stmt->bindValue(":connexion",$us_derco,PDO::PARAM_STR);
$stmt->execute();

if ($stmt) 
{
    echo "insertion ok";
    header('Location:../index1.php');
}

else 
{
echo "erreur";


}

?>

<?php
//Je recupere les valeurs de l'utilsateurs
$_SESSION['us_mail']=$_POST['us_mail'];

$sql= 'SELECT us_id,us_mdp,us_prenom from users where us_login =us_mail';
$stmt = $reg->prepare($sql);

$stmt ->bindValue(':mail',$_SESSION['us_mail'],PDO::PARAM_STR);
$stmt ->execute();
$resultat =$stmt->fetct();
$mdpcorrect = password_verify($_POST['mot_de_passe'], $resultat['us_mdp']);

if (!$resultat)
{
    echo 'Mauvaise adresse mail ou mot de passe !';
}


if ($mdpcorrect) {
derniereconnexion();
header('Location:index1.php');
return $_SESSION['us_mail'];
}


else 
{
echo 'Mauvaise adresse mail ou mot de passe';
}

?>

 
<?php
// Chargement session
$_SESSION['us_mail'] =$login;
echo $_SESSION['us_mail']. "name of id";
echo "- session ID : ".session_id();


//Derniere connexion
$derdate=$_SESSION['us_mail'];
echo $derdate;
$sql='UPDATE users set us_derco =NOW() where us_login=:connexion';
$stmt = $reg->prepare($sql);
$stmt->bindValue(':connexion',$_SESSION['us_mail'],PDO::PARAM_STR);
$stmt->execute();
if($stmt){
    echo "reussi";
}

?>





<?php
       
       // Nom
//if (empty($us_nom)) 
//{

//$message='<font color="#FF0000">Nom invalide.</font>';
//}
//else
// {
// $message='<font color="#00FF00">Nom valide.</font>'; 
// echo $message;
// } 



     //Prenom
//if (empty($us_prenom)) 
//{

//$message='<font color="#FF0000">Prénom invalide.</font>';
// }
// else
//{
//$message='<font color="#00FF00">Prénom valide.</font>'; 
//}


       



           //Email


/*if (empty($us_mail))
{
$message = '<font color="#00FF00">email non valide.</font>';
}

else 
{
$message ='<font color="#00FF00">email valide.</font>';
}*/



           //Login

/* if (empty($us_login))
{
$message = '<font color="#00FF00">login non valide.</font>';
}
       
else 
{
$message ='<font color="#00FF00">login valide.</font>';
}

   // mdp
if (empty($us_mdp))
{
$message = '<font color="#00FF00">login non valide.</font>';
}
           
else 
{
$message ='<font color="#00FF00">login valide.</font>';
}*/

?>



</body>
</html> 
