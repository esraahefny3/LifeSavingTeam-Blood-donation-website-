<?php

$national_id_of_patient=$_POST['national_id_of_patient'];
$add_time=$_POST['add_time'];
$national_id_of_donator=$_POST['national_id_of_donator'];
$donator_name=$_POST['donator_name'];
$donator_blood_type=$_POST['donator_blood_type'];
$donator_number=$_POST['donator_number'];
$donator_gender=$_POST['donator_gender'];

//echo $last_donation_dates;


require'db.php';

$getFrom_db=new getFromDB();
$db=new DB();


$finalArr=$db->insert_operation_donator($link,$getFrom_db,$national_id_of_patient,$add_time,$national_id_of_donator,$donator_name,$donator_blood_type,$donator_number,$donator_gender);

	
echo $finalArr;
             






?>