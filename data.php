<?php
session_start();
echo "Hello " . $_SESSION['user_name'];
if(!isset($_SESSION['user_name'])){
    header ("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<a href="logout.php">logout</a>
  <?php
include "database.php";

$obj = new DATABASE();

$obj->select('user',"*",null,null,null,null);
echo "<br>Select result is : " ;

$result = $obj->getResult();

echo "<table border = '1' width = '500px'>
<tr>
<th>no</th>
<th>username</th>
<th>Age</th>
<th>password</th>
<th></th>
</tr>";
foreach($result as list("user_no" => $no  ,"user_name" => $username, "user_age" => $age ,"user_password" => $password )){
    echo "<tr>
    <td>$no </td>
    <td>$username </td>
    <td> $age </td>
    <td> $password</td>
    <td><a href='delete.php?id=$no'>delete</a></td> 
    <td><a href='update.php?id=$no'>Update</a></td> 
    </tr>";
}

echo "</TABLE>";
?>

</body>
</html>