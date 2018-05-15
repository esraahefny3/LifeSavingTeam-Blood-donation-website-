<?php

require'db.php';
$numbers=array();
$numbers=$_POST['numbers'];

$getFrom_db=new getFromDB();
$db=new DB();
$finalArr=$db-> delete_donators($link,$getFrom_db,$numbers);
echo $finalArr;


?>