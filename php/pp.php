<?php
/*$dir_to_place_in='../css/pp/';
$full_img_path=$dir_to_place_in.basename($_FILES['profilepic']['name']);
$image_file_type=pathinfo($full_img_path,PATHINFO_EXTENSION);

if(isset($_POST['submit']))
{

	$check=getimagesize($_FILES['profilepic']['temp_name']);
	if($check!=false)
	{
		echo "img";
	}
	else 
	{
		echo "not img";
	}
}*/
$member_id=$_COOKIE['member_id'];

if (( $_FILES["profilepic"]["size"])==0){// fe sora wla
	
      header("Location: ../php/profile.php?user_id=".$member_id);
}
else{
        $temp=$_FILES['profilepic']['tmp_name'];
        $type=$_FILES['profilepic']['type'];
        $size=$_FILES['profilepic']['size'];
        $name=$_FILES['profilepic']['name'];

        //pic & size 
        $max=(pow(1024,2)*10);
        $allowed=array( 'image/jpeg', 'image/png', 'image/gif' );

        if( in_array( $type, $allowed ) && $size < $max ){
        	//echo "tamam";
        	//HSGL L PIC BL USER_ID W hoa unique f mfe4 hyb2a zy b3d isa :D
        	
        	
        	if($type=="image/jpeg")
			{
				$user_id=$member_id."."."jpg";
			}
			else if($type=="image/png")
			{
				$user_id=$member_id."."."png";
			}
			else if($type=="image/gif")
			{
				$user_id=$member_id."."."gif";
			}

        	 $imgpath="../css/pp/{$user_id}";
        	 $status=move_uploaded_file( $temp,$imgpath );

        	if( $status ){

                   // $res = mysql_query( "UPDATE `member` SET `profile_pic`='1' WHERE `member_id`='$member_id';");
        		require'check_in.php';
				require 'db.php';
        		$getFrom_db=new getFromDB();
				$db=new DB();
				$profile_pic=$user_id;
				$update_state=$db->change_pp($link,$getFrom_db,$profile_pic);

				if($update_state=="updated")
				{
					 header("Location: ../php/profile.php?user_id=".$member_id);
				}
				else
				{
					echo $update_state;
				}
                }
                



        }
        else
        {
        	header("Location: ../php/profile.php?user_id=".$member_id);
        }

    }

 ?>