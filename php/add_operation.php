<?php

$patient_name=$_POST['patient_name'];
$national_id_of_patient=$_POST['national_id_of_patient'];
$responsor_name=$_POST['responsor_name'];
$number_of_responsor=$_POST['number_of_responsor'];
$report_of_patient=$_POST['report_of_patient'];
$hospital=$_POST['hospital'];
$report_of_requirements=$_POST['report_of_requirements'];
$patient_gender=$_POST['patient_gender'];
$patient_blood_type=$_POST['patient_blood_type'];
//echo $last_donation_dates;


require'db.php';

$getFrom_db=new getFromDB();
$db=new DB();


$finalArr=$db->insert_operation($link,$getFrom_db,$patient_name,$national_id_of_patient,$responsor_name,$number_of_responsor,
	$report_of_patient,$hospital,$report_of_requirements,$patient_gender,$patient_blood_type);

	
echo $finalArr;
             






?>