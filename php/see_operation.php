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
      $national_id_of_patient=$_GET['id'];
      
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
 <?php
    $getFrom_db=new getFromDB();
    $db=new DB();
    $finalArr=$db->get_patient_operations($link,$getFrom_db,$national_id_of_patient);//hya rg3a k assoc array f hst5dmha kda 
    ?>
    <ul class="list-group">
            <li class="list-group-item list-group-item-success">اسم المريض:<?php echo $finalArr[0]['patient_name'];?></li>
            <li class="list-group-item list-group-item-success">الرقم القومي:<?php echo $finalArr[0]['patient_name'];?></li>
          </ul>
          <?php
    for($i=0;$i<sizeof($finalArr);$i++)
    {?>
          <button class="btn"onclick="collapsee('<?php echo "#".$i;?>')" data-toggle="collapse" data-target="<?php echo "#".$i;?>"><?php echo "العملية: ".(sizeof($finalArr)-$i);?></button>

        <div id="<?php echo $i;?>" class="collapse">
          <ul class="list-group">
            <li class="list-group-item list-group-item-success"><?php echo date('d-m-Y',$finalArr[$i]['add_time']);?></li>

  <!--************************************add donator*********************************************************************-->

          <li class="list-group-item list-group-item">
            <div>
               <div class="btn-group-vertical" role="group" aria-label="...">
                 <button type="button" class="btn btn-default"onclick="appear_donator_input('add_donator<?php echo $i;?>')" >Add operation</button>
                </div>

  <!--************************************donator_input*********************************************************************-->

              <div style=" display:none" id="add_donator<?php echo $i;?>"class="form-group form-group-lg">
               <div style="margin-left:20%"class="container marketing">
                 <!-- Three columns of text below the carousel -->
                  <div class="row">
                      <div class="col-lg-4">
                         <div style="margin:20px" class="form-group form-group-lg">
                           <input style="width:350px" type="text"  class="form-control"  id="national_id_of_donator<?php echo $i;?>"  placeholder="الرقم القومي للمتبرع">
                            <a >   **requied</a>
                         </div>

                         <div style="margin:20px" class="form-group form-group-lg">
                           <input style="width:350px" type="text"  class="form-control"  id="donator_name<?php echo $i;?>"  placeholder="اسم المتبرع">
                            <a >   **requied</a>
                         </div>

                         <div style="margin:20px" class="form-group form-group-lg">
                           <input style="width:350px" type="text"  class="form-control"  id="donator_blood_type<?php echo $i;?>"  placeholder="الفصيلة">
                          
                         </div>
                        
           
                      </div>


                      <div class="col-lg-4">
                        <div style="margin:20px" class="form-group form-group-lg">
                           <input style="width:350px" type="text"  class="form-control"  id="donator_number<?php echo $i;?>"  placeholder="رقم المتبرع">
                            <a >   **requied</a>
                         </div>

                          <div style="margin:20px" class="form-group form-group-lg">
                           <input style="width:350px" type="text"  class="form-control"  id="donator_gender<?php echo $i;?>"  placeholder="النوع">
                            <a >   **requied</a>
                         </div>


                          <div style="margin-left:100px;" class="col-lg-4">
                            <button style="width:150px;"type="button" class="btn btn-default"onclick="add_operation_donator(<?php echo $finalArr[$i]['national_id_of_patient'];?>,<?php echo $finalArr[$i]['add_time'];?>,<?php echo $i;?>)" >Add </button>
                          </div>
                       </div>
                  </div>

                 </div>
              </div>
            </div>
          </li>

<!-- *******************************************************************************************************************-->
        
 
           <li class="list-group-item list-group-item"><?php echo $finalArr[$i]['responsor_name'];?></li>
           <li class="list-group-item list-group-item"><?php echo $finalArr[$i]['number_of_responsor'];?></li>
           <li class="list-group-item list-group-item"><?php echo $finalArr[$i]['report_of_patient'];?></li>
           <li class="list-group-item list-group-item"><?php echo $finalArr[$i]['hospital'];?></li>
           <li class="list-group-item list-group-item"><?php echo $finalArr[$i]['report_of_requirements'];?></li>
           <li class="list-group-item list-group-item"><?php echo $finalArr[$i]['patient_gender'];?></li>
           <li class="list-group-item list-group-item"><?php echo $finalArr[$i]['patient_blood_type'];?></li>
           <li class="list-group-item list-group-item"><?php echo $finalArr[$i]['report_of_requirements'];?></li>
          </ul>
        </div>
        <br></br>

    <?php }
 ?>






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="../js/jq.js"></script> <!-- bgeb l jquery-- 7ttha abl bootstrap.js 34an by3ml m4akl sa3at f lazm l awel >
  
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/bootstrap/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/bootstrap/ie10-viewport-bug-workaround.js"></script>


     <!--******************************js of proj*****************************************************-->
  <script src="../js/logout.js"></script>
  <script src="../js/search.js"></script>
<script src="../js/add_operation_donator.js"></script>
<script type="text/javascript">
   function add_donator(){

    window.location.replace(" ../php/add_donator.php");
   }

   function collapsee(id)
   {
    $(id).collapse();

   }


function appear_donator_input(name)
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
