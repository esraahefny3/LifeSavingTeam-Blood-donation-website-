function add_operation(id)
{ 
	window.undefined = "un";
	
	var patient_name=document.getElementById('patient_name').value;
	var national_id_of_patient=document.getElementById('national_id_of_patient').value;
	var responsor_name=document.getElementById('responsor_name').value;
	var number_of_responsor=document.getElementById('number_of_responsor').value;
	var report_of_patient=document.getElementById('report_of_patient').value;
	var hospital=document.getElementById('hospital').value;
	var report_of_requirements=document.getElementById('report_of_requirements').value;
	var patient_gender=document.getElementById('patient_gender').value;
	var patient_blood_type=document.getElementById('patient_blood_type').value;
	//alert(record);
	if(((jQuery.trim( patient_name)).length!=0)&&((jQuery.trim( national_id_of_patient)).length!=0)&&((jQuery.trim( number_of_responsor)).length!=0)&&((jQuery.trim( report_of_requirements)).length!=0)&&((jQuery.trim( report_of_patient)).length!=0)&&((jQuery.trim( patient_gender)).length!=0))
			{
	$.ajax({
				
				url:'../php/add_operation.php',
				
				type:'post',
			
		data: {
				
				patient_name:patient_name,
				national_id_of_patient:national_id_of_patient,
				responsor_name:responsor_name,
				number_of_responsor:number_of_responsor,
				report_of_patient:report_of_patient,
				hospital:hospital,
				report_of_requirements:report_of_requirements,
				patient_gender:patient_gender,
				patient_blood_type:patient_blood_type



				
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
							window.location.replace('../php/see_operation.php?id='.concat(national_id_of_patient));
						
							
				}
			
			
		});
}
else
			{
				alert("Please fill in all required informations");
				//$("#"+id).hide(250);	
			}
		
	
	

}