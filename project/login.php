<?php
include("class/users.php");
$login=new users();
extract($_POST);
if($login->login($e,$pwd)){
    $login->url("home.php");
}
else{
    $login->url("index.php?run=failed");
}
?>