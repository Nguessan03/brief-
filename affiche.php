<?php 
include "connexion.php";


$sql = "SELECT title, type_plat, picture FROM nime ORDER BY idpub DESC";
$rest = mysqli_query($conn, $sql);

if (mysqli_num_rows($rest) > 0) {
  // output data of each row
  while($row = mysqli_fetch_array($rest)){

     echo ' 
     <div class="swiper-slide">
          <img  class="img_scroll" src="'.$row['picture'].'" alt="">
        <div >
               <div><strong><p class="div_text_scroll" >'.$row['title'].'</p></strong><br> </div>   
               <div><p class="txt">'.$row['type_plat'].'</p></div>   
                            
        </div>
              
      </div>
     ';
  }
} else {
  echo "";
}


?>

