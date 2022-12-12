<?php
session_start();
if(isset($_FILES['image']))
{
    $errors=array();
}
//print_r($_FILES);

$src=$_FILES['image']['tmp_name'];
$dst="assets/".$_FILES['image']['name'];
$size=$_FILES['image']['size'];
$file_type=$_FILES['image']['type'];
if($size>2097152){
    $errors="file size must be 2 mb or lower";
}
if(empty($errors)==true)
{
move_uploaded_file($src,$dst);

    echo"success";
}
else
{
    print_r($errors);
    
}


?> 