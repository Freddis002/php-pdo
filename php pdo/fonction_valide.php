<?php


//MODIFICATION PRODUITS

require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
$pro_id = $_POST['pro_id'];
echo $pro_id;

        $db = connexionBase(); // Appel de la fonction deconnexion

        $reference= $_POST["reference"];
        $libelle = $_POST["libelle"];
        $description = $_POST["descri"];
        $prix = $_POST["prix"];
        $stock = $_POST["stock"];
        $couleur = $_POST["couleur"];
        $fichier= $_POST["fileToUpload"];
        $ext=substr($fichier,-3,4);/*
        var_dump($_FILES);
        var_dump($_FILE);
        var_dump($_FILES["fileToUpload"]);
        var_dump($_FILE["fileToUpload"]);*/
        //var_dump($_POST["fileToUpload"]);
       
        echo $ext;
        $ajout =$_POST["ajout"];
        //$modif=$_POST["modif"];
        var_dump($ajout);






$sql = 'UPDATE produits set  pro_ref =:reference, pro_libelle =:libelle, pro_description =:descri , pro_prix=:prix, pro_stock =:stock, pro_couleur =:couleur, pro_photo=:photo,pro_d_ajout=:ajout where `produits`.pro_id=:pro_id';

// Prepare statement
$stmt = $db->prepare($sql);
//$stmt->execute();
$stmt-> bindValue(":reference",$reference,PDO::PARAM_STR);
$stmt-> bindValue(":pro_id",$pro_id,PDO::PARAM_INT);
$stmt->bindValue(":libelle",$libelle,PDO::PARAM_STR);
$stmt->bindValue(":descri",$description,PDO::PARAM_STR);
$stmt->bindValue(":prix",$prix,PDO::PARAM_STR);
$stmt->bindValue("stock",$stock,PDO::PARAM_STR);
$stmt->bindValue("couleur",$couleur,PDO::PARAM_STR);
$stmt->bindValue("photo",$ext,PDO::PARAM_STR);
$stmt->bindValue("ajout",$ajout,PDO::PARAM_STR);
//$stmt->bindValue("modif",$modif,PDO ::PARAM_STR);



$target_dir = "jarditou_photos/";
$target_file = $target_dir . basename($_POST["fileToUpload"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//$newsname=$newsId;
$extension=strrchr($_POST["fileToUpload"]["name"],'.');
//echo $newsname.'test';

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_POST["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$newsname.$extension)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  // 
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
  header('Location:liste.php');
}       

 // execute the query
 //$stmt->execute();
//if($stmt){
 
  //echo "insertion ok";




 // message produit modifié

//echo $stmt->rowCount() . " Le produit est bien modifié";
//} catch(PDOException $e) {
  //echo $sql . "<br>" . $e->getMessage();
///}

//$conn = null;



?>