
<?php

// $id=$_GET['id'];
if(isset($_POST['envoyer'])){ 
if(isset($_POST['comment']) && $_POST['comment']  !=""){
        $hide=$_POST['hide'];
        $comment= $_POST['comment'];

$sql = "INSERT INTO `commentaire`(avis,idpub)
VALUES ('$comment', ' $hide')";
// vérifier si la requete fonctionne

if (mysqli_query($conn, $sql)){
  // faire une redirection  vers la page

}else{
echo "echec d'ajout de commentaire";
}

}
}

?>
