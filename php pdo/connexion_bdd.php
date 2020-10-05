<?php
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
    
    
