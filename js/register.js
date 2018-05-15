function register(){

var first_name=document.getElementById("first_name").value;
var last_name=document.getElementById("last_name").value;
var password=document.getElementById("password").value;
var email=document.getElementById("email").value;
var phone_number=document.getElementById("phone_number").value;
var gender=document.getElementById("gender").value;
var birth_date=document.getElementById("birth_date").value;
var about_me=document.getElementById("about_me").value;
//add pp


//-----------------------------------------------------------------------------------------------------------------
if(((first_name=='')||(first_name==' '))||((password=='')||(password==' '))||((email==''))||(email==' ')||((gender==''))||(gender==' '))
{
	if(((first_name=='')||(first_name==' ')))
	document.getElementById("first_name_error").innerHTML = "       *first name is required !";
	else
	document.getElementById("first_name_error").innerHTML = " ";
//------------------------------------------------------------------------------------------------------------------
	if(((password=='')||(password==' ')))
	document.getElementById("password_error").innerHTML = "       *password is required !";
	else
	document.getElementById("password_error").innerHTML = " ";
//------------------------------------------------------------------------------------------------------------------
	if(((email=='')||(email==' ')))
	document.getElementById("email_error").innerHTML = "       *email is required !";
	else
	document.getElementById("email_error").innerHTML = " ";
///------------------------------------------------------------------------------------------------------------------
	if(((gender=='')||(gender==' ')))
	document.getElementById("gender_error").innerHTML = "       *gender is required !";
	else
	document.getElementById("gender_error").innerHTML = " ";
}

else
{
	document.getElementById("first_name_error").innerHTML = " ";
	document.getElementById("gender_error").innerHTML = " ";
	document.getElementById("password_error").innerHTML = " ";
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(email) == false) 
        {
			
           document.getElementById("email_error").innerHTML = '       *Invalid Email Address';
			
            
        }
		else
			document.getElementById("email_error").innerHTML = ' ';
			
}
var reg1= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

	
	if(((first_name=='')||(first_name==' '))||((password=='')||(password==' '))||((email==''))||(email==' ')||((gender==''))||(gender==' ')||(reg1.test(email) == false))
    {
		
	}
	else{
		
		$.ajax({
				
				url:'../php/check_sign_up.php',
				
				type:'post',
			
		data: {
				first_name:first_name,
				last_name:last_name,
				email: email,
				password:password,
				phone_number:phone_number,
				gender:gender,
				birth_date:birth_date,
				about_me:about_me
	    	  },
		
				
				success:function(data){
					
			/*	var response=jQuery.parseJSON(data);
				if (response.ana=="ana") 
					alert(response.ana);
					
				*/	
					try
					{
					var response=jQuery.parseJSON(data);
						 if((response.data=="erroree"))
						{
							alert("You have an account! please login or enter an other email... ");
						

							//document.getElementById("again_error").innerHTML = '   **you have an account! please login or enter an other email... ';
							
						}
					    else if((response.data=="register"))
					    {

					    	window.location.replace("../php/overview.php");
					    }
					    else
					    {//alert("kkk");
							alert("Something is wrong ! please try again... ");
					    //	document.getElementById("again_error").innerHTML = '   **something is wrong ! please try again... ';
							
					    }
					

					}
					catch(e)
					{
						
						alert("Something is wrong ! please try again...");
						
						//document.getElementById("again_error").innerHTML = '   **something is wrong ! please try again... ';
						
						
					}
					
				}
			
			
		});
		
		
		
		
	}
	
	
}