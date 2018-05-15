<?php 
require'check_in.php';

require 'db.php';
$user_id=$_POST['user_id'];
$getFrom_db=new getFromDB();
$db=new DB();
$finalArr=$db->remove_pp($link,$getFrom_db,$user_id);//hya rg3a k assoc array f hst5dmha kda
echo $finalArr;

?>