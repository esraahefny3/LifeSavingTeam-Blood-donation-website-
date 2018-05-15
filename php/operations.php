<!DOCTYPE html>
<html lang="en">
  <head>
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
  </head>

  <body>
    <!--*********************************************************************************************************-->
   
      <?php
        header("Content-Type: text/html; charset=utf-8");
      session_start();

       require_once'check_in.php';
       require_once'db.php';

      $member_id=$_COOKIE['member_id'];
    
      $user_id=$_COOKIE['member_id'];
      
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
<!--*********************************************************************************************************-->
   
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="./home.php?more=0">All donators</a></li>
            <li ><a href="../php/overview.php">Overview <span class="sr-only">(current)</span></a></li>
            <li ><a href=" ../php/add_donator.php">Add donator</a></li>
             <li class="active" ><a href=" ../php/operations.php">Operations<span class="sr-only">(current)</span></a></li>
            
            
          </ul>
          
        </div>
     
        </div>
      </div>

<!--************************************search operations*********************************************************************-->

         <form class="navbar-form "style="margin-left:235px;margin-top:20px">
              <input id="input" type="text" class="form-control" placeholder="search operrations" onkeyup="">
               <ul style="float:left;margin-right:350PX;width:190px;"  id="operations_menue"class="dropdown-menu">
               </ul>
          </form>
<!--************************************add operation*********************************************************************-->

   <div style="margin-left:65%;width:150px;height:80px; position: absolute;top: 80px;"class="btn-group-vertical" role="group" aria-label="...">

         <button type="button" class="btn btn-default"onclick="appear_operation_input('add_operation')" >Add operation</button>
    </div>


<!--************************************_operation_input*********************************************************************-->

 <div style=" display:none" id="add_operation"class="form-group form-group-lg">

<div style="margin-left:20%"class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">

               <div style="margin:20px" class="form-group form-group-lg">
                <input style="width:350px" type="text"  class="form-control"  id="patient_name"  placeholder="اسم المريض">   
                <a style="margin-left:10px;">   **requied</a>           
              </div>

              <div style="margin:20px" class="form-group form-group-lg">
                    <input style="width:350px" type="text"  class="form-control"  id="national_id_of_patient"  placeholder="رقم القومي للمريض">
                    <a >   **requied</a> 
              </div>

             <div style="margin:20px" class="form-group form-group-lg">
                 <input style="width:350px" type="text"  class="form-control"  id="responsor_name"  placeholder="اسم المسئول عن الحالة">
             </div>

             <div style="margin:20px" class="form-group form-group-lg">
                    <input style="width:350px" type="text"  class="form-control"  id="number_of_responsor"  placeholder="رقم التواصل">
                     <a >   **requied</a> 
               </div>

              <div style="margin:20px" class="form-group form-group-lg">
                    <input style="width:350px" type="text"  class="form-control"  id="report_of_patient"  placeholder="الحالة">
                     <a >   **requied</a>
               </div>
              
              
        </div>
        <div class="col-lg-4">

                 <div style="margin:20px" class="form-group form-group-lg">
                 <input style="width:350px" type="text"  class="form-control"  id="patient_blood_type"  placeholder="فصيلة_الحالة">
                </div>

               <div style="margin:20px" class="form-group form-group-lg">
                    <input style="width:350px" type="text"  class="form-control"  id="hospital"  placeholder="المستشفى">
               </div>

               <div style="margin:20px" class="form-group form-group-lg">
                    <input style="width:350px;height:120px;" type="text"  class="form-control"  id="report_of_requirements"  placeholder="تقرير عن المطلوب و الفصيلة">
                     <a >   **requied</a>
               </div>


                <div style="margin:20px" class="form-group form-group-lg">
                 <input style="width:350px" type="text"  class="form-control"  id="patient_gender"  placeholder="النوع">
                  <a >   **requied</a>
                </div>

                <div style="margin-left:100px;" class="col-lg-4">
              <button style="width:150px;"type="button" class="btn btn-default"onclick="add_operation('add_operation')" >Add </button>
                 </div>
        </div>
      </div>

    </div>
</div>

<!-- *******************************************************************************************************************-->
        
 






    

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
  <script src="../js/jq.js"></script> <!-- bgeb l jquery-->
  <script src="../js/logout.js"></script>
  <script src="../js/search.js"></script>
   <script src="../js/add_operation.js"></script>

<script type="text/javascript">
   function add_donator(){

    window.location.replace(" ../php/add_donator.php");
   }

function appear_operation_input(name)
{

  $("#"+name).show();

}

</script>



<script type="text/javascript">
$(document).ready(function (e){
$("#uploadForm").on('submit',(function(e){
e.preventDefault();
$.ajax({
url: "post_pic.php",
type: "POST",
data:  new FormData(this),
contentType: false,
cache: false,
processData:false,
success: function(data){
//$("#targetLayer").html(data);
var response=jQuery.parseJSON(data);

        $("#upload_statue").html("uploaded");
},
error: function(){}           
});
}));
});
</script>
  </body>
</html>
