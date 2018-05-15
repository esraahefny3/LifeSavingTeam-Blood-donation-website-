

<?php 

require 'db_connect.php';

//---------------------------------------
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
if(isset($last_name))
{
	$full_name=$first_name.' '.$last_name;
}
else
{
	$full_name=$first_name;
}
$password=($_POST['password']);
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$gender=$_POST['gender'];
$birth_date=$_POST['birth_date'];
$about_me=$_POST['about_me'];
//---------------------------------------

//echo json_encode(array('data' => 'hii','ana' => 'ana'));

/*
$_SESSION['username']=$un1;
$_SESSION['password']=$pass1;
$_SESSION['email']=$em1;
*/
$query="SELECT * FROM member WHERE  email = '$email'";//email bs lano unique
//$query="SELECT * FROM user WHERE username='$un'";
$query_run=mysqli_query($link,$query);
if($query_run)
{
	$rows_num=mysqli_num_rows($query_run);

	if($rows_num==0)//register
	{

		$query2="INSERT INTO `member` (`first_name`,`last_name`,`full_name`,`password`,`email`,`phone_number`,`gender`,`birth_date`,`about_me`) values('$first_name','$last_name','$full_name','$password','$email','$phone_number','$gender','$birth_date','$about_me') ";//email bs lano unique
		    $query_run2=mysqli_query($link,$query2);

		    if($query_run2)
		    {
					
		    		$query3="SELECT * FROM member WHERE  email = '$email'";//email bs lano unique
					//$query="SELECT * FROM user WHERE username='$un'";
					$query_run3=mysqli_query($link,$query3);
					if($query_run3)
					{



					$arr=mysqli_fetch_assoc($query_run3);

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
					echo json_encode(array('data' => 'register'));
				}
				else
				{

					echo json_encode(array('data' => mysqli_error($link)));
				}

			}
			else
			{

				echo json_encode(array('data' => mysqli_error($link)));

			}


	}
	else//will not register
	{	
		//$arr1=mysqli_fetch_assoc($query_run);
		//echo json_encode($arr1);
		echo json_encode(array('data' => 'erroree'));//error email exist

	}

   /* $arr=mysqli_fetch_assoc($query_run);

    session_start();
	$_SESSION['member_id']=$arr['member_id'];
	$_SESSION['first_name']=$arr['first_name'];
	$_SESSION['last_name']=$arr['last_name'];
	$_SESSION['password']=$arr['password'];
	$_SESSION['phone_number']=$arr['phone_number'];
	$_SESSION['gender']=$arr['gender'];
	$_SESSION['birth_date']=$arr['birth_date'];
	//$_SESSION['pp']=$arr['pp'];
	$_SESSION['home_town']=$arr['home_town'];
	$_SESSION['marital_status']=$arr['marital_status'];
	$_SESSION['about_me']=$arr['about_me'];

	echo json_encode($arr);*/
}
else
{
	
	echo json_encode(array('data' => mysqli_error($link)));

	
}

?>
