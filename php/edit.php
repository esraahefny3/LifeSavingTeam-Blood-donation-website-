

<?php 

require 'db_connect.php';

//---------------------------------------
$to_change=$_POST['to_change'];
$data=$_POST['data'];
$member_id=$_COOKIE["member_id"];

$query="UPDATE `member` SET`$to_change` ='$data'where `member_id`='$member_id' ";//email bs lano unique
		//$query="SELECT * FROM user WHERE username='$un'";
$query_run=mysqli_query($link,$query);
if($query_run)
{
	 setcookie($to_change,$data,time()+60*60*30*24,'/');
	
echo json_encode(array('data' => $to_change));

}
else
{
echo json_encode(array('data' => mysqli_error($link)));

}
?>
