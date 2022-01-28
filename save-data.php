<?php

include "database.php";

$obj = new DATABASE();

$username = $_POST['username'];
$age = $_POST['age'];
$Password = $_POST['Password'];

$value = ["user_name" => $username , "user_age" => $age , "user_password"=> $Password];

$obj->insert("user",$value);
$response = $obj->getResult();
if(!empty($response)){
    header ("location:login.php");
}else{
    echo "<h2>Failed</h2>";
}

?>

