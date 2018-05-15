<?php
require 'db_connect.php';
class getFromDB{



  public function select($link,$id,$table)
  {

  	$query="SELECT * from `$table`where `member_id`='$id'";
  	$query_run=mysqli_query($link,$query);
    if($query_run)
      {
      	$arr=mysqli_fetch_assoc($query_run);
      	return $arr;
      }
      else
      {

        return mysqli_error($link);
      }

  }

//------------------------------------------------------------------
   public function select2($link,$id,$table)
  {

    $query="SELECT * from `$table`where `member_id`='$id'";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
        $arr=mysqli_fetch_assoc($query_run);
        return $arr;
      }
      else
      {

        return mysqli_error($link);
      }

  }
//------------------------------------------------------------------
  public function selectAll($link,$table)
  {

    $query="SELECT * from `$table`";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
        $arr2=array();//b3ml array ast2bl fiha kol l rows
       
   //-----------------------------------------------------------------
       
       while($arr2[]= mysqli_fetch_assoc($query_run))
               {
                $arr2[]=mysqli_fetch_assoc($query_run);
              }
              //b loop 4an y run l query akter mn mara w a7ot fl array (kol roww hyt7t f index fl array)
//-----------------------------------------------------------------
          // array_pop($arr2)
              $c=sizeof($arr2);
              $v=0;
              for($j=0;$j<$c;$j++)
              {
                if($arr2[$j]==null)
                {  
                   $v++;
                }
               
              
              }
              for($j=0;$j<$v;$j++)
                {
                array_pop($arr2);//lano by7ot null fl a5er
              }
 //-----------------------------------------------------------------
 
             /* foreach ($arr2 as $row) {
                echo var_dump($row);
              }*/
        return $arr2;
      }
      else 
      {
        echo mysqli_error($link);
      }

  }
//--------------------------------------------------------------------
  public function Search_query($link,$info,$table)
  {

    $query="SELECT * from `$table`where `name`like N'$info%'or `number`like'$info%'or `blood_type`like N'$info%'";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
         $arr2=array();//b3ml array ast2bl fiha kol l rows
       
   //-----------------------------------------------------------------
       
       while($arr2[]= mysqli_fetch_assoc($query_run))
               {
                $arr2[]=mysqli_fetch_assoc($query_run);
              }
              //b loop 4an y run l query akter mn mara w a7ot fl array (kol roww hyt7t f index fl array)
//-----------------------------------------------------------------
         //-----------------------------------------------------------------
          // array_pop($arr2)
              $c=sizeof($arr2);
              $v=0;
              for($j=0;$j<$c;$j++)
              {
                if($arr2[$j]==null)
                {  
                   $v++;
                }
               
              
              }
              for($j=0;$j<$v;$j++)
                {
                array_pop($arr2);//lano by7ot null fl a5er
              }
 //-----------------------------------------------------------------
 
              /*foreach ($arr2 as $row) {
                echo var_dump($row);
              }*/
        return $arr2;
      }
      else
      {

        return mysqli_error($link);
      }

  }


//-----------------------------------------------------------------
    //--------------------------------------------------------------------
  public function Search_dates_query($link,$info,$table)
  {

    $query="SELECT * from `$table` where `number`='$info' order by `last_donation_date` DESC";
     $query_run=mysqli_query($link,$query);
    if($query_run)
      {
         $arr2=array();//b3ml array ast2bl fiha kol l rows
       
   //-----------------------------------------------------------------
       
       while($arr2[]= mysqli_fetch_assoc($query_run))
               {
                $arr2[]=mysqli_fetch_assoc($query_run);
              }
              //b loop 4an y run l query akter mn mara w a7ot fl array (kol roww hyt7t f index fl array)
//-----------------------------------------------------------------
         //-----------------------------------------------------------------
          // array_pop($arr2)
              $c=sizeof($arr2);
              $v=0;
              for($j=0;$j<$c;$j++)
              {
                if($arr2[$j]==null)
                {  
                   $v++;
                }
               
              
              }
              for($j=0;$j<$v;$j++)
                {
                array_pop($arr2);//lano by7ot null fl a5er
              }
 //-----------------------------------------------------------------
 
              /*foreach ($arr2 as $row) {
                echo var_dump($row);
              }*/
        return $arr2;
      }
      else
      {

        return mysqli_error($link);
      }

  }
   //--------------------------------------------------------------------
  public function Search_info_query($link,$info,$table)
  {

    $query="SELECT * from `$table` where `number`='$info'";
     $query_run=mysqli_query($link,$query);
    if($query_run)
      {
         $arr2=array();//b3ml array ast2bl fiha kol l rows
       
   //-----------------------------------------------------------------
       
       while($arr2[]= mysqli_fetch_assoc($query_run))
               {
                $arr2[]=mysqli_fetch_assoc($query_run);
              }
              //b loop 4an y run l query akter mn mara w a7ot fl array (kol roww hyt7t f index fl array)
//-----------------------------------------------------------------
         //-----------------------------------------------------------------
          // array_pop($arr2)
              $c=sizeof($arr2);
              $v=0;
              for($j=0;$j<$c;$j++)
              {
                if($arr2[$j]==null)
                {  
                   $v++;
                }
               
              
              }
              for($j=0;$j<$v;$j++)
                {
                array_pop($arr2);//lano by7ot null fl a5er
              }
 //-----------------------------------------------------------------
 
              /*foreach ($arr2 as $row) {
                echo var_dump($row);
              }*/
        return $arr2;
      }
      else
      {

        return mysqli_error($link);
      }

  }

  //--------------------------------------------------------------------
  public function Search_datess_query($link,$info,$table)
  {

    $query="SELECT a.name,a.number,a.blood_type,b.last_donation_date,c.storing_comment_time_date,c.comment from ((`$table`  as  a left join `donation_dates` as b on a.number=b.number) left join `donator_comments` as c on a.number=c.number ) where a.name like N'$info%'or b.last_donation_date like '$info%'or  a.number like'$info%'or  a.blood_type like N'$info%'  order by  b.last_donation_date   desc";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
         $arr2=array();//b3ml array ast2bl fiha kol l rows
       
   //-----------------------------------------------------------------
       
       while($arr2[]= mysqli_fetch_assoc($query_run))
               {
                $arr2[]=mysqli_fetch_assoc($query_run);
              }
              //b loop 4an y run l query akter mn mara w a7ot fl array (kol roww hyt7t f index fl array)
//-----------------------------------------------------------------
         //-----------------------------------------------------------------
          // array_pop($arr2)
              $c=sizeof($arr2);
              $v=0;
              for($j=0;$j<$c;$j++)
              {
                if($arr2[$j]==null)
                {  
                   $v++;
                }
               
              
              }
              for($j=0;$j<$v;$j++)
                {
                array_pop($arr2);//lano by7ot null fl a5er
              }
 //-----------------------------------------------------------------
 
              /*foreach ($arr2 as $row) {
                echo var_dump($row);
              }*/
        return $arr2;
      }
      else
      {

        return mysqli_error($link);
      }

  }

  
  //------------------------------------------------------------------
   public function search_comments_query($link,$info,$table)
  {

    $query="SELECT * from `$table`where `number`='$info'";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
         $arr2=array();//b3ml array ast2bl fiha kol l rows
       
   //-----------------------------------------------------------------
       
       while($arr2[]= mysqli_fetch_assoc($query_run))
               {
                $arr2[]=mysqli_fetch_assoc($query_run);
              }
              //b loop 4an y run l query akter mn mara w a7ot fl array (kol roww hyt7t f index fl array)
//-----------------------------------------------------------------
         //-----------------------------------------------------------------
          // array_pop($arr2)
              $c=sizeof($arr2);
              $v=0;
              for($j=0;$j<$c;$j++)
              {
                if($arr2[$j]==null)
                {  
                   $v++;
                }
               
              
              }
              for($j=0;$j<$v;$j++)
                {
                array_pop($arr2);//lano by7ot null fl a5er
              }
 //-----------------------------------------------------------------
 
              /*foreach ($arr2 as $row) {
                echo var_dump($row);
              }*/
        return $arr2;
      }
      else
      {

        return mysqli_error($link);
      }

  }
 //------------------------------------------------------------------

  public function get_pp_quiery($link,$table,$user_id)
  {
    

    $query="SELECT `profile_pic` from `$table`where `member_id`='$user_id'";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
        $arr=mysqli_fetch_assoc($query_run);
        
        //echo  var_dump($arr);
        return $arr;
      }
      else
      {
         // echo "jjjjjjj";
        return mysqli_error($link);
      }


  }
//------------------------------------------------------------------
 
  public function change_pp_quiery($link,$table,$profile_pic)
  {
    
      $member_id=$_COOKIE['member_id'];
    $query="UPDATE `member` SET `profile_pic`='$profile_pic' WHERE `member_id`='$member_id'";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
        return "updated";
      }
      else
      {

       // return mysqli_error($link);
        return "error";
      }


  }
  //------------------------------------------------------------------
 
  public function remove_pp_quiery($link,$table,$member_id)
  {
    
      $member_id=$_COOKIE['member_id'];
    $query="UPDATE `member` SET `profile_pic`='NULL' WHERE `member_id`='$member_id'";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
       echo json_encode(array('data' => 'removed'));
      }
      else
      {

       // return mysqli_error($link);
       echo json_encode(array('data' =>  mysqli_error($link)));
      }


  }
  
 //------------------------------------------------------------------
 
 /* public function insert_excel_query($link,$table,$name,$number,$blood_type,$last_donation_date)
  {
    
      $member_id=$_COOKIE['member_id'];
   // $query="DELETE FROM  `friendship`  WHERE (`friend1`='$member_id' and `friend2`='$user_id') or ( `friend1`='$user_id' and `friend2`='$member_id' )";
  

       $query="INSERT into `ourdata` (`name`,`number`,`blood_type`,`adder_id`)VALUES (N'$name','$number','$last_donation_date',N'$blood_type','$member_id')";
   
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
       return json_encode(array('data' => "saved"));
      
      }
      else
      {

       // return mysqli_error($link);
        return json_encode(array('data' => mysqli_error($link) ));
      }


  }*/
  //------------------------------------------------------------------

   public function insert_excel_query($link,$table,$name,$number,$blood_type,$last_donation_date,$gender)
  {
 
      $member_id=$_COOKIE['member_id'];
   // $query="DELETE FROM  `friendship`  WHERE (`friend1`='$member_id' and `friend2`='$user_id') or ( `friend1`='$user_id' and `friend2`='$member_id' )";
  

    $query0="SELECT * from `ourdata` where `number` ='$number'";
    $query_run0=mysqli_query($link,$query0);
    if($query_run0)
      {
            $arr=mysqli_fetch_assoc($query_run0);
            if($arr!=null)
            {//mwgod asgl l date l gded fl data b2a
                //34an sa3at byb2a fe space f awel lasm aw a5ro
                 $name=ltrim($name);
                 $name=rtrim($name);
                 $arr['name']=ltrim($arr['name']);
                 $arr['name']=rtrim($arr['name']);

                  $namecheckgded=explode(" ",$name);
                  $namecheckstored=explode(" ", $arr['name']);
                /* echo "<br>";
                echo "f: ".$namecheckgded[0];
                 echo "<br>";
                echo "l: ".$namecheckgded[1];


                 echo "<br>";
                  echo "f: ".$namecheckstored[0];
                 echo "<br>";
                echo "l: ".$namecheckstored[1];

                  echo "<br>";*/

             if((sizeof($namecheckstored))&&(sizeof($namecheckgded)))
                {

                if(($namecheckstored[0]==$namecheckgded[0])||($namecheckstored[1]==$namecheckgded[1]))
                    {// same name f hysgl fl dates bs

                          $now=strtotime('now');
                          $query6="INSERT into `donation_dates` (`last_donation_date`,`storing_time_date`,`member_id`,`number`)VALUES ('$last_donation_date','$now','$member_id','$number')";
                          $query_run6=mysqli_query($link,$query6);
                          if($query_run6)
                            {
                              
                            return json_encode(array('data' => "This donator is already exist ..saving his new informations"));
                              //return "This donator is already exist ..saving his new informations";
                            
                            }
                            else
                            {

                             // return mysqli_error($link);
                              return json_encode(array('data' => "This donator is already exist!"));
                              //return "This donator is already exist!";
                            }
                  
                    }
                else
                { //name changed f hysgl mn awel w gded w yms7 l adem 
                  
                  //1- delete
                //$query7="INSERT into `ourdata` (`name`,`number`,`blood_type`,`member_id`)VALUES (N'$name','$number',N'$blood_type','$member_id')";
                $query7="DELETE FROM `ourdata` where `number`='$number'";
                  $query_run7=mysqli_query($link,$query7);
                  if($query_run7)
                    {
                       //return json_encode(array('data' => 'deleted'),JSON_PRETTY_PRINT);
                    // return"This donator has the same number of an other donator....deleting the last and save this donator";
              $query4="INSERT into `ourdata` (`name`,`number`,`blood_type`,`member_id`,`gender`)VALUES (N'$name','$number',N'$blood_type','$member_id','$gender')";
                
                  $query_run4=mysqli_query($link,$query4);
                  if($query_run4)
                    {
                      $now=strtotime('now');
                          $query5="INSERT into `donation_dates` (`last_donation_date`,`storing_time_date`,`member_id`,`number`)VALUES ('$last_donation_date','$now','$member_id','$number')";
                          $query_run5=mysqli_query($link,$query5);
                          if($query_run5)
                            {
                            return json_encode(array('data' =>  $name." will replace =>".$arr['name']));
                            // return $name." will replace =>".$arr['name'];
          
                            }
                            else
                            {

                             // return mysqli_error($link);
                             return json_encode(array('data' => "Error has occured"));
                              //return "Error has occured";
                            }
                    
                    }
                    else
                    {

                    return json_encode(array('data' =>"Error has occured"));
                     // return "Error has occured";
                    }
                
                    }
                    else
                    {

                     return json_encode(array('data' => "Error has occured"));
                     // return "Error has occured";
                    }
                

                  //----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                  //2-hysgl tany bl asm l gded



                }
              }

              else {
               return json_encode(array('data' => "Error has occured...full name is required"));
               // return "Error has occured...full name is required";
              }
          }
          else
          {


                   //hsglo lano asln m4 mwgod fl data
          $query2="INSERT into `ourdata` (`name`,`number`,`blood_type`,`member_id`,`gender`)VALUES (N'$name','$number',N'$blood_type','$member_id','$gender')";
        
          $query_run2=mysqli_query($link,$query2);
          if($query_run2)
            {
              $now=strtotime('now');
                  $query3="INSERT into `donation_dates` (`last_donation_date`,`storing_time_date`,`member_id`,`number`)VALUES ('$last_donation_date','$now','$member_id','$number')";
                    $query_run3=mysqli_query($link,$query3);
                  if($query_run3)
                    {
                   return json_encode(array('data' => "saved"));
                   // return "saved";
                    }
                    else
                    {

                     // return mysqli_error($link);
                     return json_encode(array('data' => "Error has occured"));
                    //  return "Error has occured";
                    }
            
            }
            else
            {

             return json_encode(array('data' => "Error has occured"));
              //return "Error has occured";
            }
        
          }
     
      }
      else
      {
       return json_encode(array('data' => "Error has occured"));
        //return json_encode($arr,JSON_PRETTY_PRINT);
       // return "Error has occured";
      }


  }
//======================================================================================================
  public function edit_our_data_query($link,$record,$value,$number,$last_donation_date,$storing_comment_time_date)
    
  {
    $query=null;
    $table=null;
    $member_id=$_COOKIE['member_id'];
      if($record=='name_input')
        {
          $table='ourdata';
          $query="UPDATE `$table` SET `name`=N'$value' WHERE `number`='$number'";
        } 
       else if($record=='number_input')
        {
          $table='ourdata';
          $query="UPDATE `$table` SET `number`='$value' WHERE `number`='$number'";
        } 
       else if($record=='blood_type_input')
        {
          $table='ourdata';
          $query="UPDATE `$table` SET `blood_type`='$value' WHERE `number`='$number'";
        } 
         else if($record=='gender_input')
        {
          $table='ourdata';
          $query="UPDATE `$table` SET `gender`='$value' WHERE `number`='$number'";
        } 
    
    
      else if($record=='last_donation_dates_input')
       {
      $table='donation_dates';

    
        $now=strtotime('now');
        $value=strtotime($value);
        $query="UPDATE `$table` SET `last_donation_date`='$value',`storing_time_date`='$now' WHERE `number`='$number' and `last_donation_date`='$last_donation_date'";
      }

      else if($record=='add_last_donation_dates_input')
       {
      $table='donation_dates';

    
        $now=strtotime('now');
       // $value=strtotime($value);
      $value = str_replace('/', '-', $value);
       $value= strtotime($value);
        //$query="UPDATE `$table` SET `last_donation_date`='$value',`storing_time_date`='$now' WHERE `number`='$number' and `last_donation_date`='$last_donation_date'";
        $query="INSERT INTO `$table` (`number`,`last_donation_date`,`storing_time_date`,`member_id`) VALUES ('$number','$value','$now','member_id') ";
    

      }

      else if($record=='comment_input')
      {
      $table='donator_comments';

        $now=strtotime('now');
        $query="UPDATE `$table` SET `comment`=N'$value',`  storing_comment_time_date`='$now' WHERE `number`='$number' and `storing_comment_time_date`='$storing_comment_time_date'";
   
      }
      else if($record=='add_comment_input')
      {
        $table='donator_comments';

        $now=strtotime('now');
        //$query="INSERT  into `$table` SET `comment`=N'$value',`  storing_comment_time_date`='$now' WHERE `number`='$number'";
        $query="INSERT  into `$table` ( `number`,`comment`,`storing_comment_time_date`,`member_id`)VALUES ('$number',N'$value','$now','member_id')";
   
      }

   
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
       return json_encode(array('data' => 'saved'));
      }
      else
      {

       // return mysqli_error($link);
       return json_encode(array('data' =>  mysqli_error($link)));
      }





  }
//======================================================================================================

   public function delete_donator_query($link,$table,$number)
  {

    $query="DELETE from `$table` where `number`='$number'";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
       return json_encode(array('data' => 'Deleted'));
      }
      else
      {

       // return mysqli_error($link);
       return json_encode(array('data' =>  mysqli_error($link)));
      }

  }
  //======================================================================================================

   public function delete_donators_query($link,$table,$numbers)
  {
    $failed=0;
    for ($i=0; $i <sizeof($numbers) ; $i++) { 
    

    $query="DELETE from `$table` where `number`='$numbers[$i]'";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
   // echo "string";
      }
      else
      {
        $failed=1;
        break;
       // return mysqli_error($link);
      
      }
}
    if($failed==0)
    {
       return json_encode(array('data' => 'Deleted'));
    }
    else
    {

       return json_encode(array('data' =>  mysqli_error($link)));
    }
  }
  //======================================================================================================

   public function delete_info_query($link,$table,$number,$record)
  {
    $query=null;
    if($table=='donation_dates')
    {
      $query="DELETE from `$table` where `number`='$number'and `last_donation_date`='$record'";
    }
    else if($table=='donator_comments')
    {
      $query="DELETE from `$table` where `number`='$number'and `storing_comment_time_date`='$record'";


    }

    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
       return json_encode(array('data' => 'Deleted'));
      }
      else
      {

       // return mysqli_error($link);
       return json_encode(array('data' =>  mysqli_error($link)));
      }

  }

 //======================================================================================================

   public function insert_excel_available_query($link,$table,$number,$gender)
    
  {
    $query="SELECT `last_donation_date`from `donation_dates`where `number`='$number' order by `last_donation_date` DESC";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
        $arr=mysqli_fetch_assoc($query_run);
        if($arr!=null)
        {
           $available=null;
                  if($gender=='male')
                 {

                  $available=strtotime(date('d-m-Y',$arr['last_donation_date']).'+85 days');
                }
                else if($gender=='female')
                {
                  $available=strtotime(date('d-m-Y',$arr['last_donation_date']).'+115 days');
                }

          $query1="UPDATE`ourdata` set `available`='$available' where `number`='$number'";
           $query_run1=mysqli_query($link,$query1);
          if($query_run1)
            {
               return json_encode(array('data' =>$available));
      

            }
            else
            {
           
                     return json_encode(array('data' => "Error has occured"));
                   
            }
       }
       else
       {
        $available=null;
           
        if($gender=='male')
                 {

                  $available=strtotime(date('d-m-Y','1-1-2000'.'+85 days'));
                }
                else if($gender=='female')
                {
                  $available=strtotime(date('d-m-Y','1-1-2000'.'+115 days'));
                }

          $query1="UPDATE`ourdata` set `available`='$available' where `number`='$number'";
           $query_run1=mysqli_query($link,$query1);
          if($query_run1)
            {
               return json_encode(array('data' =>$available));
      

            }
            else
            {
           
                     return json_encode(array('data' => "Error has occured"));
                   
            }

       }
      }
      else
      {
       // return mysqli_error($link);
       
                     return json_encode(array('data' => "Error has occured"));
                   
      }

  }

 //======================================================================================================

public function insert_operation_query($link,$table,$patient_name,$national_id_of_patient,$responsor_name,$number_of_responsor,$report_of_patient,$hospital,$report_of_requirements,$patient_gender,$patient_blood_type)
  {
    $now=strtotime('now');

    $query="INSERT INTO  `$table` (`add_time`,`patient_name`,`national_id_of_patient`,`responsor_name`,`number_of_responsor`,`report_of_patient`,`hospital`,`report_of_requirements`,`patient_gender`,`patient_blood_type`) VALUES ('$now','$patient_name','$national_id_of_patient','$responsor_name','$number_of_responsor','$report_of_patient','$hospital','$report_of_requirements','$patient_gender','$patient_blood_type')";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
         return json_encode(array('data' => "Saved"));
                   
      }
      else
      {
         return json_encode(array('data' => mysqli_error($link)));
                   
      }



  }

  //------------------------------------------------------------------
  public function get_patient_operations_query($link,$table,$national_id_of_patient)
  {

    $query="SELECT * from `$table`where `national_id_of_patient`='$national_id_of_patient' order by `add_time`desc";
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
        $arr2=array();//b3ml array ast2bl fiha kol l rows
       
   //-----------------------------------------------------------------
       
       while($arr2[]= mysqli_fetch_assoc($query_run))
               {
                $arr2[]=mysqli_fetch_assoc($query_run);
              }
              //b loop 4an y run l query akter mn mara w a7ot fl array (kol roww hyt7t f index fl array)
//-----------------------------------------------------------------
          // array_pop($arr2)
              $c=sizeof($arr2);
              $v=0;
              for($j=0;$j<$c;$j++)
              {
                if($arr2[$j]==null)
                {  
                   $v++;
                }
               
              
              }
              for($j=0;$j<$v;$j++)
                {
                array_pop($arr2);//lano by7ot null fl a5er
              }
 //-----------------------------------------------------------------
 
             /* foreach ($arr2 as $row) {
                echo var_dump($row);
              }*/
        return $arr2;
      }
      else 
      {
        echo mysqli_error($link);
      }

  }

  //======================================================================================================

public function insert_operation_donator_query($link,$table,$national_id_of_patient,$add_time,$national_id_of_donator,$donator_name,$donator_blood_type,$donator_number,$donator_gender)
    {
    $now=strtotime('now');

    
    $query="INSERT INTO  `$table` (`national_id_of_patient`,`add_time`,`national_id_of_donator`,`donator_name`,`donator_blood_type`,`donator_number`,`donator_gender`) VALUES ('$national_id_of_patient','$add_time','$national_id_of_donator','$donator_name','$donator_blood_type','$donator_number','$donator_gender')";
   
    $query_run=mysqli_query($link,$query);
    if($query_run)
      {
         return json_encode(array('data' => "Saved"));
                   
      }
      else
      {
         return json_encode(array('data' => mysqli_error($link)));
                   
      }



  }


}
 

?>