<?php
$con=mysqli_connect('localhost','root','','mabase');
$type=$_POST['type'];
$id=$_POST['id'];
if($type=='likes'){
	$sql="UPDATE nime SET likes=likes+1, idpub= $id WHERE idpub=$id";
}else{
	$sql="UPDATE nime SET dislikes=dislikes+1, idpub= $id WHERE idpub=$id";
}

$res=mysqli_query($con,$sql);
if(!$res){
	echo"error";

}else{
	echo "successfull";
}
?>