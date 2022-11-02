<?php
include "upload.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads</title>

</head>
<body>
<section>
<form action="" method="POST" enctype="multipart/form-data">

<p>

<?php
if(isset($message)){
    echo $message;
}
?>
</p>
<label >Titre:</label>
<input type="text" name="title">
<br><br>
<label >Type:</label>
<select name="type_plat">
<option >Conseil</option>
<option >Fastfood</option>
<option >Recette</option>
<option >Retour d'experience</option>
<option >Restaurant</option>
</select>
<br><br>
<label >Images:</label>
<input type="file" name="file">
<br><br>
<label>Commentaire:</label>
<textarea name="comment" cols="30" rows="10"></textarea>
<br><br>
<input type="submit" value="submit" name="submit">


</form>
</section>    
</body>
</html>


