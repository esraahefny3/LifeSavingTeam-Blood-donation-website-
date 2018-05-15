<?php

require'db.php';
$number=$_POST['number'];

$getFrom_db=new getFromDB();
$db=new DB();
$finalArr=$db-> delete_donator($link,$getFrom_db,$number);
echo $finalArr;


?>