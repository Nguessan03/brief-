<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- <script src="option.js"></script> -->
        <title>Categories</title>
        <style  type="text/css">
   .image img{

width:  200px;
height: 110px;
object-fit: cover;
border-radius: 10px 10px 0px 0px ;
   }

.main_image{
      display:none;
width: 202px;
border: 1px solid gray;
box-shadow: 0.5px;
border-radius: 10px 10px 10px 10px;
margin-left: 10px;
margin-top: 10px;
margin-bottom:10px;
   }

   .main_image:hover{

    box-shadow: 0 0 5px #666;
    border-radius: 10px 10px 10px 10px;
   }

div.desc {
  padding: 15px;
  text-align: center;
}


#vp{
  background: #6c5ce7;
  color: #fff;
  border: 0;
  outline: 0;
  font-size: 18px;
  padding: 10px 100px;
  border-radius: 4px;
 margin-bottom:10px;
 width: 100%;
  align-items:center;
}

</style>
</head>
<body>
<?php
include "connexion.php";
if(isset($_POST['request'])){

        $resq = $_POST['request'];
        $sql ="SELECT * FROM nime WHERE type_plat='$resq' ORDER BY idpub DESC ";
        $result= mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        while($row=mysqli_fetch_assoc($result)){

         echo ' 
     <div  class="image_row"> 
          <div class="main_image">
          <div class="image">
          <a href="card.Php? id='.$row['idpub'].'">
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
        ?>

<?php         
}
?>   


</body>
</html>
<?php
include "vp.php";
?> 
<script>
        $(document).ready(function(){
  $(".main_image").slice(0, 10).show();
  $("#vp").on("click", function(){
      $(".main_image:hidden").slice(0, 10).slideDown()
           if ($(".main_image:hidden").length == 0) {
             $( "#vp" ).text( 'rien' );
              // return false;
            }
  })
 });
</script>


