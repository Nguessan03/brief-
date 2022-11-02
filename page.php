<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>welikefood</title>
		<link rel="stylesheet" type="text/css" href="style_css.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <!-- lien jquery -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="voirplus.js"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="filtres.js"></script>
    
		<style type="text/css">

.swiper {
        width: 100%;
        height:  20%;
display: inline-block;
      }

      .swiper-slide {
        
        font-size: 18px;
        background: #fff;
       
    padding: 10px;
    display: flex;
    border-radius: 50px;   
    border: 0.5px solid skyblue;
    size: 200px;
    height: 50px;
    margin-left:5px;
    overflow:hidden;
        Center slide text vertically
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

     
/*fin caroussel*/
.txt{

 height: 10px;
    padding-left: 3px;  
    padding-right:60px ;
    padding-top: 0px ;
    font-size: 12px;
    font-family:  Helvetica, sans-serif,Arial;
    padding-bottom:  10px; 

}

		.div_text_scroll {
			font-size: 10px;
			width: 100px;
			height: 50px;
			margin-left: 8px;
			margin-right: 10px;
			margin-bottom: -60px;
      /* padding:  25px */
		}
		.img_scroll {
			
			width: 45px;
			height: 45px;
			border-radius: 50%;
			margin-left: 40px;
		}
	
		head {
			min-width: 900px;
		}
		body {
			min-width: 900px;
		}
 .image_row 
{

display: inline-block;
align-items: center;

} 
#btn{
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
.swiper-pagination-bullet{
display: none;
}

		</style>
</head>
<body>
	
	<?php
  include "header.php";
  ?> 

	<!--trait de separation-->
	 
	 <div>
	 	<hr style="margin-bottom: 10px;margin-top: 1px;">	 	
	 </div>
	 

	 <div class="swiper mySwiper">
      <div class="swiper-wrapper">
    <?php 
include "affiche.php";
?>
</div>
   </div>

      <!-- les fleches -->
      <div class="swiper-button-next" style="height: 80px;width: 50px; color: black; background-color: white;font-weight: bold;margin-top: -130px;margin-right: 0;"></div>
      <div class="swiper-button-prev" style="height: 80px;width: 50px;color: black; background-color: white;font-weight: bold;margin-top: -130px;"></div>
     <div class="swiper-pagination"></div>
    </div>
	 

    <!-- publication -->
<section >

<div  class="image_row"> 

 <?php
include "publications.php";
?> 
</div>

	</section>


<!-- Swiper JS -->

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 9,
        spaceBetween: 1,
        slidesPerGroup: 9,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>



</body>
</html>
