<?php
include "connexion.php";

// vérifier si les fichiers sont envoyé
if(isset($_POST["submit"])){

  // vérifier si les images et les information ont été selectionné
  if( !empty($_FILES["file"])  && 
       isset($_POST["type_plat"]) && 
       isset($_POST["title"])  &&
       isset($_POST["comment"]) &&
         ($_POST["type_plat"]) && 
         ($_POST["title"]) &&
         ($_POST["comment"]) !=""){

          // les variable
$f_name = $_FILES["file"]["name"];
$f_tmp  = $_FILES["file"]["tmp_name"];
$f_size = $_FILES["file"]["size"];

// récupérer le nom de l'image
$target_dir = "desk/";
$target_file = $target_dir . basename(($f_name));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Vérifier la taille de l'image
if ($f_size < 6000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

//Vérifier le format de l'image
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// déplacer l'image dans un dossier image
$move_img = move_uploaded_file($f_tmp , $target_file);
     
// insertion des information dans la base de données

$title = addslashes($_POST["title"]);
$type = addslashes($_POST["type_plat"]);
$comment = addslashes($_POST["comment"]);

$sql = "INSERT INTO `nime`(title, type_plat, picture,comment)
VALUES('$title', '$type', ' $target_file', '$comment')";
// vérifier si la requete fonctionne

if (mysqli_query($conn, $sql)){
  // faire une redirection  vers la page

  header("location: page.php");
}else{

$message = "Echec de l'ajout de l'image";

}
     
       }else{

          // si les champs sont vide on affiche
          $message= "veuillez remplir tous les champs";
       }
   
}

?>