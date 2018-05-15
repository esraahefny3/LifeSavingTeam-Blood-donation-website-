function remove_pp(user_id)
{
	

$.ajax({
				
				url:'../php/remove_pp.php',
				
				type:'post',
			
		data: {
				user_id:user_id
				
				
	    	  },
		
				
				success:function(data){

					
				var response=jQuery.parseJSON(data);
				alert(response.data);
				window.location.replace("../php/profile.php");
						
					
					
					
				}
			
			
		});
		



}