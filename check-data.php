<?php

include "database.php";

$obj = new database();

$username= $_POST['username'];
$passowrd= $_POST['password'];





 $obj->select("user","*",null,"user_name = '$username' AND user_password = '$passowrd'",null,null,null);

 $result = $obj->getResult();
 if(!empty($result)){
     session_start();
     $_SESSION['user_name'] = $result[0]['user_name'];
     $_SESSION['user_password'] = $result[0]['user_password'];
     header ("location:data.php");
 }
 else{
    echo "<h2>Failed</h2>";
 }

?>