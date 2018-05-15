function login(){
	
var password=document.getElementById("password").value;

var email=document.getElementById("email").value;
//-----------------------------------------------------------------------------------------------------------------
if(((password=='')||(password==' '))||((email==''))||(email==' '))
{
	if(((email=='')||(email==' ')))
	document.getElementById("email_error").innerHTML = "          email is required !";
	else
	document.getElementById("email_error").innerHTML = " ";
//------------------------------------------------------------------------------------------------------------------
	if(((password=='')||(password==' ')))
	document.getElementById("password_error").innerHTML = "          password is required !";
	else
	document.getElementById("password_error").innerHTML = " ";
}

else
{
	
	document.getElementById("password_error").innerHTML = " ";
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(email) == false) 
        {
			
           document.getElementById("email_error").innerHTML = '          Invalid Email Address';
			
            
        }
		else
			document.getElementById("email_error").innerHTML = ' ';
			
}
	
	if(((password=='')||(password==' '))||((email==''))||(email==' '))
	{
		
	}
	else{
		
		$.ajax({
				
				url:'php/check_login.php',//linkme/
				
				type:'post',
			
		data: {
				email: email,
				password:password
			},
		
				
				success:function(data){
					
				


					var response=jQuery.parseJSON(data);
					
					try
					{

						if( (response.password==password)&&(response.email==email))
						{
							
							
						window.location.replace("php/overview.php");//linkme/
						

						}
					

					}
					catch(e)
					{
						document.getElementById("notFound").innerHTML = " wrong email or password";
						
					}
					
				}
			
			
		});
		
		
		
		
	}
	
	
}