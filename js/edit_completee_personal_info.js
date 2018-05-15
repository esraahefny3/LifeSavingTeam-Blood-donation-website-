function edit_completee_personal_info(id_div,id_input)//to change id=id_div
	{

		window.undefined = "un";
	try{
			var data=document.getElementById(id_input).value;
										

			if(typeof data != 'un')
			{
				$.ajax({
					data: {
						to_change:id_div,//hy8yr ah bzabt
						data:data//kymt aly hy8yro l gdeda
		    	  },
			
					url:'./edit.php',
					
					type:'post',
				
					success:function(data1){
						
							var response=jQuery.parseJSON(data1);
						
							$("#"+id_div).hide(250);
							
							$.ajax({ 
					            url: window.location, 

					            //on success, set the html to the responsetext
					            success: function(){ 
					            	
					                $("#"+id_div.concat('data')).html(data); 
					                
					            } 
			               });

					}
			
			});

			}
			
			else
			{
				$("#"+id_div).hide(250);	
			}
		}
	
	catch(e)
		{
	alert(e);
			$("#"+id_div).hide(250);
		}


	}