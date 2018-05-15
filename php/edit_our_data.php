<?php 
require'db.php';
$record=$_POST['record'];
$value=$_POST['value'];
$number=$_POST['number'];
$last_donation_date=$_POST['last_donation_date'];
$storing_comment_time_date=$_POST['storing_comment_time_date'];
$gender=$_POST['gender'];

$getFrom_db=new getFromDB();
$db=new DB();
$finalArr=$db-> edit_our_data($link,$getFrom_db,$record,$value,$number,$last_donation_date,$storing_comment_time_date);
              

	if($record=='add_last_donation_dates_input')
       {
       	$finalArr1=json_decode($finalArr, true);
		if(($finalArr1['data']!='This donator is already exist!')&&($finalArr1['data']!='Error has occured'))
		            {
		             
		             // $datan[5] = str_replace('/', '-', $data[5]);     
		             // $datan[5]=strtotime($data[5],'+85 days');

		             $finalArr5=$db->insert_excel_available($link,$getFrom_db,$number,$gender);//hya rg3a k assoc array f hst5dmha kda 
		              // $finalArr5=json_decode($finalArr5, true);
		              
		            }  
		}
echo $finalArr;

?>
