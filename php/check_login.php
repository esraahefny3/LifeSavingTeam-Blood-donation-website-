

<?php 

require 'db_connect.php';

//---------------------------------------
$password=($_POST['password']);

$email=$_POST['email'];
//---------------------------------------

/*
$_SESSION['username']=$un1;
$_SESSION['password']=$pass1;
$_SESSION['email']=$em1;
*/
$query="SELECT * FROM member WHERE  email = '$email'and password='$password'";//email bs lano unique
//$query="SELECT * FROM user WHERE username='$un'";
$query_run=mysqli_query($link,$query);
if($query_run)
{
	$arr=mysqli_fetch_assoc($query_run);

  			
					setcookie('member_id',$arr['member_id'],time()+60*60*30*24,"/");
					setcookie('first_name',$arr['first_name'],time()+60*60*30*24,"/");
					setcookie('last_name',$arr['last_name'],time()+60*60*30*24,"/");
					
					/*setcookie('first_name',$arr['first_name']);
					setcookie('last_name',$arr['last_name']);
					setcookie('password',$arr['password']);
					setcookie('email',$arr['email']);
					setcookie('phone_number',$arr['phone_number']);
					setcookie('gender',$arr['gender']);
					setcookie('birth_date',$arr['birth_date']);
					//$_SESSION['pp']=$arr['pp'];
					setcookie('home_town',$arr['home_town']);
					setcookie('marital_status',$arr['marital_status']);
					setcookie('about_me',$arr['about_me']);*/
	echo json_encode($arr);
}
else
{
	
	echo ("no");

	
}

?>
