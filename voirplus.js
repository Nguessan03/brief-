$(document).ready(function(){
  $(".image_main").slice(0, 10).show()
  $("#btn").on("click", function(){
      $(".image_main:hidden").slice(0, 10).slideDown()
           if ($(".image_main:hidden").length == 0) {
             $( "#btn" ).text( 'rien' );
              // return false;
            }
  })
 });