function search(info)
{

	document.getElementById("l").innerHTML = "";
	//if((info=="")||(info==" "))

	if((jQuery.trim( info)).length==0)
	{
		$("#l").hide(250);
		
	}
	else{

	$.ajax({
				
				url:'../php/search.php',
				
				type:'post',
			
		data: {
				
				info:info
				
	    	  },
		
				
				success:function(data){
					var response=jQuery.parseJSON(data);
			
					for (var i = 0; i <10; i++) 
					{		
							if(response[i]==null)
							{
								break;
							}
							else{
							var c=$('<li><a style="color:black;" href="../php/see_donator.php?num='.concat(response[i]['number']).concat('"><i class="icon-pencil"></i> ').concat(response[i]["name"]).concat('</a></li>'));
							
					
					        $("#l").append(c);
					       }
					}
					var c1=$('  <li><a style="color:black;"href="../php/see_more.php?more=0"><i class="icon-pencil"></i> see more</a></li>');
						 $("#l").append(c1);
			 $("#l").show();
					
				}
			
			
		});


}
		
}