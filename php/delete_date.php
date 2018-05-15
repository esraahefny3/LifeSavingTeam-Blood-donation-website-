<?php

require'db.php';
$number=$_POST['number'];
$last_donation_date=$_POST['last_donation_date'];
$storing_comment_time_date=$_POST['storing_comment_time_date'];
$gender=$_POST['gender'];

$getFrom_db=new getFromDB();
$db=new DB();
$finalArr=$db-> delete_info($link,$getFrom_db,$number,$last_donation_date,$storing_comment_time_date);

	
$finalArr1=json_decode($finalArr, true);
              
if(($finalArr1['data']=='Deleted'))
            {
       
             $finalArr5=$db->insert_excel_available($link,$getFrom_db,$number,$gender);//hya rg3a k assoc array f hst5dmha kda 
         	//echo $finalArr5;
            }  

echo $finalArr;


?>