<?php
include("class/users.php");
$que=new users;
$cat=$_POST['cat'];
$que->questions_show($cat);
print_r(($$que->que));

?>