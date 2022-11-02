$(document).ready(function(){

        $("#selct").on('change',function(){

                var value =$(this).val();
		 alert(value);
                     $.ajax({ 
                            url:'categories.php',
                            type:'POST',
                            data:'request='+ value,

                            beforeSend: function(){

                            $(".image_row").html("<span>working...</span>");
                            },
                           success:function(data){
                                   $(".image_row").html(data)
                          }

                   });

         });
});