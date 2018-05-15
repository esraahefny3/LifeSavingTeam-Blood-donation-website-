function add_operation_donator(national_id_of_patient,add_time,i)
{ 
	window.undefined = "un";
	
	var national_id_of_donator=document.getElementById('national_id_of_donator'.concat(i)).value;
	var donator_name=document.getElementById('donator_name'.concat(i)).value;
	var donator_blood_type=document.getElementById('donator_blood_type'.concat(i)).value;
	var donator_number=document.getElementById('donator_number'.concat(i)).value;
	var donator_gender=document.getElementById('donator_gender'.concat(i)).value;
	
	if (((jQuery.trim(national_id_of_donator)).length!=0)&&((jQuery.trim( donator_blood_type)).length!=0)&&((jQuery.trim(  donator_number)).length!=0)&&((jQuery.trim(donator_gender)).length!=0))
	{	

		
	$.ajax({
				
				url:'../php/add_operation_donator_backend.php',
				
				type:'post',
			
		data: {
				
				
				national_id_of_patient:national_id_of_patient,
				add_time:add_time,
				national_id_of_donator:national_id_of_donator,
				donator_name:donator_name,
				donator_blood_type: donator_blood_type,
			    donator_number:donator_number,
			    donator_gender:donator_gender

	    	  },
		
				
				success:function(data){
					
							var response=jQuery.parseJSON(data);
							if(response.data=="Saved")
					             {
					              alert("Saved");
					              }
					              else
					              {
					                alert(response.data);
					              }
							location.reload();
						
							
				}
			
			
		});
}

		else   
			{
				alert("Please fill in all required informations");
				//$("#"+id).hide(250);	
			}
		
	
	

}