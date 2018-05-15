<?php
require'check_in.php';
require 'db.php';
$myProfile=$_POST['myProfile'];
if($myProfile==0){
$getFrom_db2=new getFromDB();
$db2=new DB();
$finalArr=$db2->check_friend($link,$getFrom_db2,$user_id);//hya rg3a k assoc array f hst5dmha kda 
session_start();
if($finalArr=="friends")
{
$_SESSION['val']="unfriend";
}
else if($finalArr=="not_friends")
{
$_SESSION['val']="add";
}
else if($finalArr=="under_request")
{
$_SESSION['val']="cancel_request";
}
echo json_encode(array('data' => $_SESSION['val']));
?>