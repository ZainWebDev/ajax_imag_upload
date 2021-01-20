<?php

$path=$_POST['path'];
if(unlink($path)){
echo "Image Deleted";

}
?>