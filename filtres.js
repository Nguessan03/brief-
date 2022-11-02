$(document).ready(function(){

        $("#selct").on('change',function(){

                var value =$(this).val();
                    $.ajax({ 
                            url:'categories.php',
                            type:'POST',
                            data:'request='+ value,

                            beforeSend: function(){

                            $(".main_image").html("<span>working...</span>");
                            },
                           success:function(data){
                                   $(".image_main").html(data)
                          }

                   });

        });
});