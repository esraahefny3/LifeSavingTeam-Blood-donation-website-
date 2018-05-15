<?php

$name=$_POST['name'];
$number=$_POST['number'];
$blood_type=$_POST['blood_type'];
$last_donation_dates=$_POST['last_donation_dates'];
$gender=$_POST['gender'];
//echo $last_donation_dates;

try{
	$last_donation_dates = str_replace('/', '-', $last_donation_dates);
$last_donation_dates=strtotime($last_donation_dates);
require'db.php';

$getFrom_db=new getFromDB();
$db=new DB();
$finalArr=$db-> insert_excel_row($link,$getFrom_db,$name,$number,$blood_type,$last_donation_dates,$gender);
	
$finalArr1=json_decode($finalArr, true);
              
if(($finalArr1['data']!='This donator is already exist!')&&($finalArr1['data']!='Error has occured'))
            {
             
             // $datan[5] = str_replace('/', '-', $data[5]);     
             // $datan[5]=strtotime($data[5],'+85 days');

             $finalArr5=$db->insert_excel_available($link,$getFrom_db,$number,$gender);//hya rg3a k assoc array f hst5dmha kda 
              // $finalArr5=json_decode($finalArr5, true);
              
            }  
//echo var_dump($finalArr);
echo $finalArr;

}
catch(Exceotion $e)
{
	echo "error";
}




?>