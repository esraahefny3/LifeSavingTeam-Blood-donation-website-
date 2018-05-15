
<html>
<head>
<!-- ******************************************7gat l bootstrap****************************************************************-->
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>LifeSavingTeam</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/bootstrap/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">

</head>

<body>
<?php
header("Content-Type: text/html; charset=utf-8");

$member_id=$_COOKIE['member_id'];
?>
  <!--**************************************************nav*******************************************************-->
   
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
     <!--*********************************************************************************************************-->
   
          <a class="navbar-brand" href="#">LifeSavingTeam..Alex</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul style="margin-right:20px;"class="nav navbar-nav navbar-right">
            <li><a   href="../php/home.php?more=0">Home</a></li>
            <li><a href="<?php echo './profile.php?user_id='.$member_id;?>">Profile</a></li>
            <li><a href="<?php echo './members_list.php';?>"><span class="glyphicon glyphicon-globe"></span> Users </a></li>
            <li><a onclick="logout()" href=""><span class="glyphicon glyphicon-new-window"></span> logout </a></li>
          </ul>
          <form class="navbar-form navbar-right">
              <input id="input" type="text" class="form-control" placeholder="search" onkeyup="search(this.value)">
               <ul style="float:left;margin-right:350PX;width:190px;"  id="l"class="dropdown-menu">
               </ul>
          </form>
        </div>
      </div>
    </nav>
<!--*************************************************************************************************************************-->
<!--*********************************************************************************************************-->
   
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li ><a href="../php/home.php?more=0">All donators</a></li>
            <li ><a href="../php/overview.php">Overview </a></li>
            <li class="active"><a href=" ../php/add_donator.php">Add donator<span class="sr-only">(current)</span></a></li>
             <li ><a href=" ../php/operations.php">Operations</a></li>
            
          </ul>
          
        </div>
        <br></br>
      </div>

<h2 style="margin-left:20%"id="register" style="font-size:20px;" >Register</h2>
    
    <!--
    <p id='again_error'></p>
  -->



<div style="margin-left:20%"class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">

         <div style="margin:20px" class="form-group form-group-lg">
          <input style="width:350px" type="text"  class="form-control"  id="name_input"  placeholder="الاسم">              
        </div>

       <div style="margin:20px" class="form-group form-group-lg">
           <input style="width:350px" type="text"  class="form-control"  id="number_input"  placeholder="الرقم">
       </div>

       <div style="margin:20px" class="form-group form-group-lg">
              <input style="width:350px" type="text"  class="form-control"  id="blood_type_input"  placeholder="الفصيلة">
         </div>

         <div style="margin:20px" class="form-group form-group-lg">
           <input style="width:350px" type="text"  class="form-control"  id="last_donation_dates_input"  placeholder=" d/m/y    :اخر معاد تبرع">
          </div>

          <div style="margin:20px" class="form-group form-group-lg">
           <input style="width:350px" type="text"  class="form-control"  id="gender_input"  placeholder="النوع">
          </div>



           </div>

<!-- *******************************************************************************************************************-->
        
        <div style="margin-left:100px;" class="col-lg-4">
          
              <button style="width:150px;"type="button" class="btn btn-default"onclick="add_donator()" >Add </button>

         </div>


      </div>
        
      </div><!-- /.row -->

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/bootstrap/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/bootstrap/ie10-viewport-bug-workaround.js"></script>


 <!--******************************js of proj*****************************************************-->
 <script type="text/javascript" src="../js/jquery.js"></script>
 <script type="text/javascript" src="../js/jquery-ui.js"></script>


<script type="text/javascript">
function show_edit(name)
{

  $("#"+name).show();
}
//-----------------------------------------------------------------------------------

function delete_donator(number)
{
$.ajax({
        
        url:'../php/delete_donator.php',
        
        type:'post',
      
    data: {

        number:number
    
          },
    
        
        success:function(data1){
          
              var response=jQuery.parseJSON(data1.substring(0,(data1.length-1)));
             // location.reload();
             if(response.data=="Deleted")
             {
              alert("Deleted");
              }
              else
              {
                alert("Error has occured");
              }
             window.location.replace("../php/home.php?more=0");
            
              
        }
      
      
    });

}
//-----------------------------------------------------------------------------------

function add_donator()
{


  var name=document.getElementById('name_input').value;
  var number=document.getElementById('number_input').value;
  var blood_type=document.getElementById('blood_type_input').value;
  var last_donation_dates=document.getElementById('last_donation_dates_input').value;
  var gender=document.getElementById('gender_input').value;
  
  if(((jQuery.trim( name)).length==0)||((jQuery.trim( number)).length<11)||((name.split(" ")).length<2))
  {
    alert("please enter correct full name and number !");
  }
  else{

    if((jQuery.trim( blood_type)).length==0)
    {
      blood_type=null;

    }
    if((jQuery.trim( last_donation_dates)).length==0)
    {
      last_donation_dates=null;

    }

        $.ajax({
                
                url:'../php/add_donator_backend.php',
                
                type:'post',
              
            data: {

                name:name,
                number:number,
                blood_type:blood_type,
                last_donation_dates:last_donation_dates,
                gender:gender
                  },
            
                
                success:function(data1){
                 
                alert(data1);
                  
                    var response=jQuery.parseJSON(data1);
             // location.reload();
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
}

$('#last_donation_dates_input').datepicker({
    dateFormat:'dd/mm/yy',
    showAnim:'show'
 });
</script>
  <script src="../js/jq.js"></script> <!-- bgeb l jquery-->
  <script src="../js/logout.js"></script>
  <script src="../js/search.js"></script>
  <script src="../js/edit_our_data.js"></script>
   <script src="../js/bootstrap.min.js"></script>




</body>
</html>