<?php

require'db.php';
$info=$_POST['info'];
session_start();
$_SESSION['info']=$info;
$getFrom_db=new getFromDB();
$db=new DB();
$finalArr=$db-> search($link,$getFrom_db,$info);//hya rg3a k assoc array f hst5dmha kda 
$arr=json_encode($finalArr);
echo $arr;


?>