function editd(id,record,number,last_donation_date,storing_comment_time_date,gender)
{ 
	window.undefined = "un";
	try{
	var value=document.getElementById(record).value;
	//alert(record);
	if((jQuery.trim( value)).length!=0)
			{
	$.ajax({
				
				url:'../php/edit_our_data.php',
				
				type:'post',
			
		data: {
				
				record:record,
				value:value,
				number:number,
				last_donation_date:last_donation_date,
				storing_comment_time_date:storing_comment_time_date,
				gender:gender


				
	    	  },
		
				
				success:function(data){
					
							var response=jQuery.parseJSON(data);
							if(response.data=="saved")
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
				$("#"+id).hide(250);	
			}
		}
	
	catch(e)
		{
	alert(e);
			$("#"+id).hide(250);
		}


}