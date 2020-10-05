<?php
@$nom=$_POST["nom"];
@$prenom=$_POST["prenom"];
@$email=$_POST["mail"];
@$login=$_POST["mdp"];
@$dateinscription=$_POST["inscription"];
@$derniereconnexion=$_POST["connexion"];

$message="";


if (isset($valider)) {
    
                                    // Nom
if (empty($nom)) 
    {

    $message='<font color="#FF0000">Nom invalide.</font>';
     }
      else
        {
         $message='<font color="#00FF00">Nom valide.</font>'; 
         echo $message;
        } 



                                    //Prenom
if (empty($prenom)) 
        {
    
    $message='<font color="#FF0000">Prénom invalide.</font>';
        }
        else
        {
        $message='<font color="#00FF00">Prénom valide.</font>'; 
        }


                                        

                         
  
                                            //Email
  
  
        if (empty($email))
        {
            $message = '<font color="#00FF00">email non valide.</font>';
        }

            else 
            {
                $message ='<font color="#00FF00">email valide.</font>';
            }



                                            //Comment

          if (empty($login))
        {
             $message = '<font color="#00FF00">login non valide.</font>';
             }
                                        
            else 
            {
             $message ='<font color="#00FF00">login valide.</font>';
            }

              

        } 
        require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
        function connexionBase()
        {
             
           try 
        
                {
                       
                        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou;port=3308', 'root', ''); //connexion sur WAMP
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return $db;
                } 
            catch (Exception $e)
                {
                        echo 'Erreur : ' . $e->getMessage() . '<br>';
                        echo 'N° : ' . $e->getCode() . '<br>';
                        die('Connexion au serveur impossible.');
                } 
        }

?>

