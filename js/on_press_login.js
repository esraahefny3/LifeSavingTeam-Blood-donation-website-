function on_press_login(value,name)
{
	
		if (value.length == 0)
		   { 
				
			    if(name=="email")
				{
					document.getElementById("email_error").innerHTML = "       email is required !";
				}
				else if(name=="password")
				{
					document.getElementById("password_error").innerHTML = "       password is required !";
					
				}        
   		   } 

  		  else
  		   {
        
               
				  if(name=="email")
					{
						var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
						if (reg.test(value) == false) 
						{
						document.getElementById("email_error").innerHTML = '          Invalid Email Address';
						}
						else
							document.getElementById("email_error").innerHTML = ' ';
					}
				else if(name=="password")
					{
					document.getElementById("password_error").innerHTML = " ";
			
					}
            }
        
       
    
}