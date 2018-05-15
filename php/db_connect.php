<?php
$host='localhost';
$userName='root';
$password='';
$dbName='linkMe';


$link=mysqli_connect($host,$userName,$password)or die('could not connect');
mysqli_query($link,"SET NAMES utf8");
mysqli_query($link,"SET CHARACTER SET utf8");
mysqlI_select_db($link,$dbName);



?>