<?php
include("class/users.php");
$register=new users();
extract($_POST); 
$img_name=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name']; 
move_uploaded_file($tmp_name,"img/".$img_name);
$query="insert into user values('','$n','$e','$pwd','$img_name')"; 
if($register->signup($query)){
    $register->url("index.php?run=success");
}
?>
