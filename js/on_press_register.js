function on_press_register(value,name)
{
	
		if (value.length == 0) 
		{ 
				if(name=="first_name")
		        document.getElementById("first_name_error").innerHTML = "       First name is required !";
				else if(name=="email")
				{
					document.getElementById("email_error").innerHTML = "       Email is required !";
				}
				else if(name=="password")
				{
					document.getElementById("password_error").innerHTML = "       Password is required !";
					
				}
					else if(name=="gender")
				{ 
					document.getElementById("gender_error").innerHTML = "       Gender is required !";
					
				}
        
    }
     else {
        
                if(name=="first_name")
      					  document.getElementById("first_name_error").innerHTML = " ";

				else if(name=="email")
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
					else if(name=="gender")
					{
					document.getElementById("gender_error").innerHTML = " ";
			
					}
		  }
}