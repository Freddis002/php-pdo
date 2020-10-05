
<?php
       
require "connexion_bdd.php";

$db = connexionBase(); // Appel de la fonction deconnexion

        $reference= $_POST["reference"];
        echo $reference; 
        $libelle = $_POST["libelle"];
        echo $libelle;
        $description = $_POST["descri"];
        echo $description;
        $prix = $_POST["prix"];
        echo $prix;
        $stock = $_POST["stock"];
        echo $stock;
        $couleur = $_POST["couleur"];
        echo $couleur;
        $fichier= strrchr($_FILES["fileToUpload"]["name"],'.');
        $ext=substr($fichier,-3,4);
        echo $ext;
        $ajout =$_POST["datea"];
        echo $ajout;
        $categorie=$_POST["categorie"];
        echo $categorie;
        


$sql= 'INSERT INTO produits (pro_cat_id,pro_ref,pro_libelle,pro_description,pro_prix,pro_stock,pro_couleur,pro_d_ajout,pro_photo) VALUES  (  :categorie ,:reference, :libelle, :descri,  :prix, :stock, :couleur, :ajout, :photo )';

$stmt = $db->prepare($sql);

$stmt->bindValue(":categorie",$categorie,PDO::PARAM_STR);
$stmt->bindValue(":reference",$reference,PDO::PARAM_STR);
$stmt->bindValue(":libelle",$libelle,PDO::PARAM_STR);
$stmt->bindValue(":descri",$description,PDO::PARAM_STR);
$stmt->bindValue(":prix",$prix,PDO::PARAM_INT);
$stmt->bindValue(":stock",$stock,PDO::PARAM_INT);
$stmt->bindValue(":couleur",$couleur,PDO::PARAM_STR);
$stmt->bindValue(":photo",$ext,PDO::PARAM_STR);
$stmt->bindValue(":ajout",$ajout,PDO::PARAM_STR);


 // execute the query
 $stmt->execute();
 $newsId=$db->lastInsertId();
if($stmt){

            $target_dir = "jarditou_photos/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $newsname=$newsId;
            $extension=strrchr($_FILES["fileToUpload"]["name"],'.');
            echo $newsname.'test';

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
            if ($_FILES["fileToUpload"]["size"] > 500000) {
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
            }       
    
}
header('Location:liste.php');