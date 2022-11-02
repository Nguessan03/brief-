<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style  type="text/css">

   .image img{

width:  200px;
height: 110px;
object-fit: cover;
border-radius: 10px 10px 0px 0px ;
   }

   .image_main{
      display:none;
width: 202px;
border: 1px solid gray;
box-shadow: 0.5px;
border-radius: 10px 10px 10px 10px;
margin-left: 10px;
margin-top: 10px;
margin-bottom:10px;
   }

   .image_main:hover{

    box-shadow: 0 0 5px #666;
    border-radius: 10px 10px 10px 10px;
   }

div.desc {
  padding: 15px;
  text-align: center;
}

#ajaxbtn:disabled {
  background: #7f8c8d;
  color: #2c3e50;
  cursor: default;
}
.image{
display: "inline-block";

}

</style>


</head>
<body>




<?php

include "connexion.php";

$sql = "SELECT * FROM nime ORDER BY idpub DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_array($result)) {
     echo ' 
     <div  class="image_row"> 
          <div class="image_main">
          <div class="image">
          <a href="card.php? id='.$row['idpub'].'">
          <img src="'.$row['picture'].'" alt="">
          </a> 
          <div class="desc">
               <strong><p class="title">'.$row['title'].'</p></strong>
              <p class="">'.$row['type_plat'].'</p>
              <p class="">publié le:'.$row['date'].'</p> 
              </div>
             </div>
          </div>
          </div>
     ';

  }

   echo'  <div >
   <button id="btn">Voir plus</button>
 </div>';
} else {
  echo "";
}

?>

</body>
</html>







