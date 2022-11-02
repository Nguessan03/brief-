$(document).ready(function(){

        $(".main_image").slice(0, 10).show()
    $( "#vp" ).on( "click", function ()
    {
        alert(cool)    
            $(".main_image").slice(0, 10).slideDown()
            if ($(".main_image").length == 0) {
                $("#vp").fadeOut('slow')
            }
        })
    })