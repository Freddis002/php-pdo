<?php


require ("connexion_bdd.php");
$id=$_GET['id'];
echo $id;
$bdd=connect ();
$sql = "DELETE FROM produits
WHERE pro_id =$id";

$resul=$bdd->exec($sql);
?>