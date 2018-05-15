function logout()
{

$.ajax({
				
				url:'./logout.php',
				
				type:'post',
			
				success:function(){
					
					
					window.location.replace("../index.php");
					
				}
			
			
		});
		



}