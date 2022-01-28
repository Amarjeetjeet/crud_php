<?php

include "database.php";

$obj = new database();

$username=$_POST['username'];
$age=$_POST['age'];
$id = $_POST['id'];

$param = ["user_name"=>$username , "user_age"=>$age];
$obj ->update("user",$param,"user_no = $id");

header("location:data.php");


?>