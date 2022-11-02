<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>welikefood</title>
		<link rel="stylesheet" type="text/css" href="style_css.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
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
    size: 260px;
    height: 55px;
    margin-left:15px;
    
        /* Center slide text vertically */
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

 height: 14px;
    padding-left: 8px;  
    padding-right:60px ;
    padding-top: 0px ;
    font-size: 12px;
    font-family:  Helvetica, sans-serif,Arial;
    padding-bottom:  7px; 

}

		.div_text_scroll {
			font-size: 12px;
			width: 100px;
			height: 50px;
			margin-left: 8px;
			margin-right: 30px;
			margin-bottom: -60px;
      /* padding:  25px */
		}
		.img_scroll {
			
			width: 50px;
			height: 50px;
			border-radius: 50%;
			margin-left: 30px;
		}
	
		head {
			min-width: 900px;
		}
		body {
			min-width: 900px;
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
      <div class="swiper-button-next" style="height: 70px;width: 50px; color: black; background-color: white;font-weight: bold;margin-top: -135px;margin-right: 0;"></div>
      <div class="swiper-button-prev" style="height: 70px;width: 50px;color: black; background-color: white;font-weight: bold;margin-top: -135px;"></div>
     <div class="swiper-pagination"></div>
    </div>
	 

    <!-- publication -->
<section  class="image_row">

<?php
include "img.php";
?>
	</section>
<!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 7,
        spaceBetween: 1,
        slidesPerGroup: 7,
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