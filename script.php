<?php
require_once "connexion.php";
if(isset( $_GET['id']) && ($_GET['id'] != NULL)){
  $id=$_GET["id"];

  $sql="SELECT * FROM nime WHERE idpub='$id'";
 $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_array($result)) {
$img = $row['picture'];
$titre= $row['title'];
$type = $row['type_plat'];
$comment= $row['comment'];
$date = $row['date'];
      }
    }
  }

 else {
  echo "0 results";
}

?>