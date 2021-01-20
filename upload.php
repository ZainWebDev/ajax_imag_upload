<?php

if($_FILES['image']['name']!=""){
$img_name=$_FILES['image']['name'];
$extension=pathinfo($img_name,PATHINFO_EXTENSION);

$valid_extensions=array("jpg","jpeg","png","PNG");
if(in_array($extension, $valid_extensions)){
	$new_name=rand().".".$extension;
	$tmp_name=$_FILES['image']['tmp_name'];
	$path="images/".$new_name;
	if(move_uploaded_file($tmp_name, $path)){
		echo "<img src='{$path}'><br>
			<button data-path='{$path}' id='del_btn'>Delete</button>
		";
	}
}

else
{
	echo "<script>alert('Select an Image to Upload');</script>";
}





}

?>