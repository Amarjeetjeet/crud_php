<?php
include "database.php";
$id = $_GET['id'];
$obj = new database();

$obj->delete("user","user_no = '$id'");

header ("location:data.php");
?>
