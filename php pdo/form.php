<?php
@$nom=$_POST["nom"];
@$prenom=$_POST["prenom"];
@$adresse=$_POST["adresse"];
@$code_postal=$_POST["code_postal"];
@$ville=$_POST["ville"];
@$email=$_POST["email"];
@$commentaire=$_POST["commentaire"];
@$valider=$_POST[" valider"];





    
                     // Nom
    if (empty($_POST["nom"]))  
     {
                                
     echo "Veuillez saisir un nom";
     }
      else {
          echo " Votre nom est " .$nom;
      }
     
    


                                    //Prenom
        if (empty($_POST["prenom"]))  
        {
    
    echo "<br>Veuillez saisir un prenom";
        }
        else {
            echo "<br>Votre prénom est  " .$prenom;
        }
       
    


                                         // CP

    if ((!is_numeric($_POST['code_postal'])) || (strlen($_POST['code_postal'])!=5)) 
        {
            echo " <br>Votre Code postal n'est pas correct.";
        }

        else{
            echo "<br> Votre code postal est ".$code_postal;
        }
            
       
        

                                         // Ville
         if (empty($_POST["ville"]))  
        {
            echo "<br>Votre ville n'est pas correct";
   
        } 

            else 
            {
                echo "<br>Votre ville est " .$ville;
            }
  
  

           



                                            //Comment

            if (empty($_POST["commentaire"])) 
        {
             echo "<br>Vous n'avez pas saisi de commentaire";
         }

            else 
            {
                echo "<br>Votre commentaire" .$commentaire;
            }


         

         if ($nom && $prenom && $adresse && $code_postal && $ville  && $commentaire )
         {
                echo "<br>Vous avez saisi tous les champs du formulaire";
         }
 
         else 
     {
            echo "<br>Veuillez saisir les champs ";
        }

       
           
       

        



?>



