<?php
require_once "connexion.php";
if(isset( $_GET['id']) && ($_GET['id'] != NULL)){

  $id=$_GET['id'];

  $sql="SELECT * FROM nime WHERE idpub='$id'";
 $result = mysqli_query($conn, $sql);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <title>image_card</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="comment.js"></script>

    <style>
.ig{

    width: 340px; 
    height:370px;
    margin:20px 70px 0 150px;
    border:2px solid green;
   border-radius:50px; 

}
h3{
  margin:50px 0px 5px 250px;
  color:: #008518;
}
h4{
 color:#3551ec; 
}
p#com{
  color:#000000;
}

p#pub{
 color: #596CE5;
}
div.g{

  position:relative;
  display: inline-block;

}
.img{
  width:340px;
   height:340px; 
   padding:30px; 
   z-index: -1;  
}
.lis_dis{
position:absolute;
left:98px;
top: 315px
}
.b{
  position: relative;
 left: 65px;
  bottom: 5px;  
  color:#6495ed; 
background:#6495ed;
width: 50px;
height:50px;
border-radius:50%;
z-index: 1;

}
.c{
 position: absolute;
 left:20px;
 top:15px;
width: 6px;
margin: auto;
}
.b1{
position: relative;
background:red;
width: 50px;
height:50px;
border-radius:50%;
left: 230px;
  bottom: 55px; 
}
.c1{
   position: absolute;
  left: 20px;
  bottom:15px; 
  width: 6px;
margin: auto;
  color: white;
}
a{
  color: white;
}

a:visited:active{
  text-decoration:none;
  color:white;
  
}
a:hover{
  text-decoration:none;
  color: white;
}
input{
  font-size: 20px;
}
#comment{
  outline:0;
width: 600px;
height: 70px;
display:flex;
/* z-index:2; */
margin-left:100px;
margin-top:50px;
margin-bottom:10px;
border-radius: 10px;
border: 2px solid #6495ed;

}
form{
position:relative;

}
button{
  height:80px;
  width:80px;
  background-color:white;
   border:none;
   border-radius:50px;
position:relative;
top: -90px;
margin-right:290px;
color:white;
float:right;
 
}
button img{
  width: 85px;
  height:85px;
}

    </style>
</head>
<body>

<section>
  <?php 
   while($row = mysqli_fetch_array($result)) {
    $img = $row['picture'];
    $titre= $row['title'];
    $type = $row['type_plat'];
    $comment= $row['comment'];
    $date = $row['date'];
   
    ?>
<h3><?php echo "$titre";?></h3>
        <div class="ig g">
<img  src="<?php echo "$img"; ?>"  class="img">
<div class=" b">
<a href="javascript:void(0)" class="c">
<span onclick="like_update('<?php echo $row['idpub']?>')"><span id="like_loop<?php echo $row['idpub']?>"><?php echo $row['likes']?></span></span>
</a>
</div>
 <img src="desk\istockphoto-1154840667-612x612.jpg" alt="like/dislike" width=150px; height=100px class="lis_dis">
<div class="b1">
<a href="javascript:void(0)" class="c1">
  <span onclick="dislike_update('<?php echo $row['idpub']?>')"><span id="dislike_loop_<?php echo $row['idpub']?>"><?php echo $row['dislikes']?></span></span>
</a>
</div>
       </div> 
       
   <div class="g">
<h4><?php echo "$type";?></h4>
<p id="com"><?php echo "$comment";?></p>
<p id="pub"><?php echo "pulié le:$date" ?></p>
<div>
  </section>


<?php
  }
  ?>
   <?php
include "commentaire.php";
  ?>
  <div>
  <form action="" method="POST" enctype="multipart/form-data">
  <input id="comment" type="text" name="comment" placeholder="   Commentaire ....">
  <input type="hidden" name="hide" value="<?php echo $id ?>">
<button type="submit" name="envoyer"><img src="desk\commentaire.jpeg" alt=""></button>
</div>
<?php
}
else {
echo "0 results";
}

?>



  <script>
		function like_update(id){
			jQuery.ajax({
				url:'update.php',
				type:'post',
				data:'type=likes&id='+id,
				success:function(result){
					var current_count=jQuery('#like_loop_'+id).html();
					current_count++;
					jQuery('#like_loop_'+id).html(current_count);
			
				}
			});
		}	
		function dislike_update(id){
			jQuery.ajax({
				url:'update.php',
				type:'post',
				data:'type=dislikes&id='+id,
				success:function(result){
					var current_count=jQuery('#dislike_loop_'+id).html();
					current_count++;
					jQuery('#dislike_loop_'+id ).html(current_count);
			
				}
			});
		}	
		</script>
</body>
</html>
