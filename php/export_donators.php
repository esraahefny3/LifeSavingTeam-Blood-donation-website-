<?php
    
    $mycase=$_POST['mycase'];

if($mycase=='1')//all donators
{
$which2="donators";
        $finalArr2=$db->get_all($link,$getFrom_db,$which2);//hya rg3a k assoc array f hst5dmha kda 
        if(sizeof($finalArr2)>0)
        {

	        $data.="الاسم".","."الرقم".","."الفصيلة".","."اخر معاد تبرع".","."النوع"."\n";//l asm  l rakam  l fasela ....
	         for($i=0;$i<sizeof($finalArr2);$i++)
	         {
	          $data.=$finalArr2[$i]["name"].",";
	          $data.=$finalArr2[$i]["number"].",";
	          $data.=$finalArr2[$i]["blood_type"].",";
	          $data.=$finalArr2[$i]["last_donation_date"].",";
	          $data.=$finalArr2[$i]["gender"];
	          $data.="\n"; //we cannot w
	         }

	         session_start();
	         $_SESSION['data']=$data;
	       

		}
}
else
{

}

?>