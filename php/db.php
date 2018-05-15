<?php
require_once'getFDB.php';//get from db
class DB{

//----------------------------------------------------------------------
	public function get_Profile_info($link,$getFrom_db,$id)
	{
	 
		 $table='member';
		 $arr=$getFrom_db->select($link,$id,$table);
		$json=json_encode($arr);
		 return $json;
		 

	}
	//----------------------------------------------------------------------
	public function get_Profile_info2($link,$getFrom_db,$id)
	{
	 
		 $table='member';
		 $arr=$getFrom_db->select2($link,$id,$table);
		//$json=json_encode($arr);
		 return $arr;
		 

	}
//----------------------------------------------------------------------
	public function get_all($link,$getFrom_db,$which)
	{
		$table=null;
		if($which=='members')
		{
			$table='member';
		}
		else if($which=='donators')
		{
			$table='ourdata';
		}
		
	//	$final_arr=array();

		// $array2=array();
		//while($final_arr[]=$getFrom_db->selectAll($link,$table))
		//{
		 $final_arr=$getFrom_db->selectAll($link,$table);
		//}
		/* foreach ($arr as $row) {
    		$arr2[] = $row;
			}*/
			/*foreach ($final_arr as $row) {
                echo var_dump($row);
              }*/

		 /*$jsonArr=array()
		 foreach ($final_arr as $row) {
		 	$jsonArr[]=json_encode($row);
		 }*/
		 //echo $jsonArr.'*-*-*-*-*-*-*-*-*-*-*--------';
		 
		 return $final_arr;

	}

	//-----------------------------------------------------------------

public function search($link,$getFrom_db,$info)
	{
	 
		 $table='ourdata';
		 $arr=$getFrom_db->Search_query($link,$info,$table);
		 return $arr;
		 
	}

	//-----------------------------------------------------------------

public function search_info($link,$getFrom_db,$info)
	{
	 
		 $table='ourdata';
		 $arr=$getFrom_db->Search_info_query($link,$info,$table);
		 return $arr;
		 
	}
	//-----------------------------------------------------------------

public function search_dates($link,$getFrom_db,$info)
	{
	 
		 $table='donation_dates';
		 $arr=$getFrom_db->Search_dates_query($link,$info,$table);
		 return $arr;
		 
	}

//-----------------------------------------------------------------

public function search_comments($link,$getFrom_db,$info)
	{
	 
		 $table='donator_comments';
		 $arr=$getFrom_db->Search_comments_query($link,$info,$table);
		 return $arr;
		 
	}



//--------------------------------------------------------------------------------------
	public function get_pp($link,$getFrom_db,$user_id)
	{
		$table='member';
		
		 $final_arr=$getFrom_db->get_pp_quiery($link,$table,$user_id);
		//echo  var_dump($final_arr);
		 return $final_arr;


	}
//--------------------------------------------------------------------------------------
	public function change_pp($link,$getFrom_db,$profile_pic)
	{
		$table='member';
		
		 $final_arr=$getFrom_db->change_pp_quiery($link,$table,$profile_pic);
		
		 return $final_arr;


	}
	//--------------------------------------------------------------------------------------
	public function remove_pp($link,$getFrom_db,$user_id)
	{
		$table='member';
		
		 $final_arr=$getFrom_db->remove_pp_quiery($link,$table,$user_id);
		
		 return $final_arr;


	}

	
	//--------------------------------------------------------------------------------------
	
		public function insert_excel_row($link,$getFrom_db,$name,$number,$blood_type,$last_donation_date,$gender)
	{
		$table='ourdata';
		
		 $final_arr=$getFrom_db->insert_excel_query($link,$table,$name,$number,$blood_type,$last_donation_date,$gender);
		
		 return $final_arr;


	}

	//--------------------------------------------------------------------------------------
	
		public function insert_excel_available($link,$getFrom_db,$number,$gender)
	{
		$table='ourdata';
		
		 $final_arr=$getFrom_db->insert_excel_available_query($link,$table,$number,$gender);
		
		 return $final_arr;


	}
	//--------------------------------------------------------------------------------------
	
	public function edit_our_data($link,$getFrom_db,$record,$value,$number,$last_donation_date,$storing_comment_time_date)
	{
		

		$final_arr=$getFrom_db->edit_our_data_query($link,$record,$value,$number,$last_donation_date,$storing_comment_time_date);
		
		 return $final_arr;
	}
//--------------------------------------------------------------------------------------
	
	public function delete_donator($link,$getFrom_db,$number)
	{
		
		$table='ourdata';
		
		 $final_arr=$getFrom_db-> delete_donator_query($link,$table,$number);
		
		 return $final_arr;
	}

	//--------------------------------------------------------------------------------------
	
	public function delete_donators($link,$getFrom_db,$numbers)
	{
		
		$table='ourdata';
		
		 $final_arr=$getFrom_db-> delete_donators_query($link,$table,$numbers);
		
		 return $final_arr;
	}
//--------------------------------------------------------------------------------------
	
	public function delete_info($link,$getFrom_db,$number,$last_donation_date,$storing_comment_time_date)
	{
		$final_arr=null;
		if($last_donation_date!='')
		{
			$table='donation_dates';
			$final_arr=$getFrom_db-> delete_info_query($link,$table,$number,$last_donation_date);
		
		}
		else if($storing_comment_time_date!='')
		{
			$table='donator_comments';
			$final_arr=$getFrom_db-> delete_info_query($link,$table,$number,$storing_comment_time_date);
		
		}
		
		 
		 return $final_arr;
	}

//--------------------------------------------------------------------------------------

	public function insert_operation($link,$getFrom_db,$patient_name,$national_id_of_patient,$responsor_name,$number_of_responsor,$report_of_patient,$hospital,$report_of_requirements,$patient_gender,$patient_blood_type)
	{

		$table='operations';
		
		 $final_arr=$getFrom_db-> insert_operation_query($link,$table,$patient_name,$national_id_of_patient,$responsor_name,$number_of_responsor,$report_of_patient,$hospital,$report_of_requirements,$patient_gender,$patient_blood_type);
		
		 return $final_arr;

	}


//--------------------------------------------------------------------------------------

	public function get_patient_operations($link,$getFrom_db,$national_id_of_patient)
	{

		$table='operations';
		
		 $final_arr=$getFrom_db-> get_patient_operations_query($link,$table,$national_id_of_patient);

		 return $final_arr;

	}

//--------------------------------------------------------------------------------------

	public function insert_operation_donator($link,$getFrom_db,$national_id_of_patient,$add_time,$national_id_of_donator,$donator_name,$donator_blood_type,$donator_number,$donator_gender)
		{

		$table='operations_donators';
		
		 $final_arr=$getFrom_db->insert_operation_donator_query($link,$table,$national_id_of_patient,$add_time,$national_id_of_donator,$donator_name,$donator_blood_type,$donator_number,$donator_gender);
	

		 return $final_arr;

	}





}

?>

