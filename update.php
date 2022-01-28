<?php

include "database.php";
$id = $_GET['id'];
$obj = new database();

$obj->select("user","*",null,"user_no= $id" ,null,null,null);
$result = $obj->getresult();
    ?>

  
<form action="update-data.php" method="post">
        <label for="">Username</label>
        <input type="text" name="username" id="" value=<?php echo $result[0]["user_name"]; ?>>
        <br>
        <br>
        <label for="">age</label>
        <input type="text" name="age" id="" value=<?php echo $result[0]["user_age"]; ?>>

        <input type="hidden" name="id" value=<?php echo $id; ?>>
        
        <br>
        <input type="submit" value="Update">
    </form>
