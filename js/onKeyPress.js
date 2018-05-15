function on_press_login(value,name,num)
{
	if (num==1)
	{
		if (value.length == 0) { 
		if(name=="username")
        document.getElementById("erroruN").innerHTML = "   **username is required !";
		else if(name=="email")
		{
			document.getElementById("erroremail").innerHTML = "   **email is required !";
		}
		else if(name=="password")
		{
			document.getElementById("errorpass").innerHTML = "   **password is required !";
			
		}
        
    } else {
        
                if(name=="username")
					document.getElementById("erroruN").innerHTML = " ";
				else if(name=="email")
					{
						var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
						if (reg.test(value) == false) 
						{
						document.getElementById("erroremail").innerHTML = '       *Invalid Email Address';
						}
						else
							document.getElementById("erroremail").innerHTML = ' ';
					}
				else if(name=="password")
					{
					document.getElementById("errorpass").innerHTML = " ";
			
					}
            }
        
       
    }else if(num==2)
	{
		
		if (value.length == 0) { 
		if(name=="username2")
        document.getElementById("erroruN2").innerHTML = "   **username is required !";
		else if(name=="email2")
		{
			document.getElementById("erroremail2").innerHTML = "   **email is required !";
		}
		else if(name=="password2")
		{
			document.getElementById("errorpass2").innerHTML = "   **password is required !";
			
		}
        
    } else {
        
                if(name=="username2")
					document.getElementById("erroruN2").innerHTML = " ";
				else if(name=="email2")
					{
						var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
						if (reg.test(value) == false) 
						{
						document.getElementById("erroremail2").innerHTML = '       *Invalid Email Address';
						}
						else
							document.getElementById("erroremail2").innerHTML = ' ';
					}
				else if(name=="password2")
					{
					document.getElementById("errorpass2").innerHTML = " ";
			
					}
            }
        
	}
}