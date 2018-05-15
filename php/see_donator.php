
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
<!-- **************************************************NAV****************************************************************-->
  
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

<?php
require'db.php';
session_start();
$info=$_GET['num'];

$getFrom_db=new getFromDB();
$db=new DB();
$finalArr=$db-> search_info($link,$getFrom_db,$info);
//echo var_dump($finalArr);
?>
          <h2 class="sub-header">informations:</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>comments</th>
                  <th>مواعيد التبرع</th>
                  <th>معاد التبرع القادم</th>
                  <th>النوع</th>
                  <th>الفصيلة</th>
                  <th>الرقم</th>
                  <th>الاسم</th>
                </tr>
              </thead>
              <tbody>
                <tr>
        <!--==================================================================================-->

                  <td> 
                      <a   style="font-size:17px"href="#" onclick="show_edit('add_comment')">Add comment</a>
                      <div style=" display:none" id="add_comment"class="form-group form-group-lg">
                      <label style="font-size:20px" for="exampleInputtEXT1">New comment: </label>
                         <input style="width:350px" type="text"  class="form-control"  id="add_comment_input"  placeholder="text">
                        <button type="button" class="btn btn-default" onclick="editd('add_comment','add_comment_input','<?php echo $finalArr[0]['number']?>','','')">Save</button>
                          
                         </div>     
                         <br></br>
                    <?php
                    $getFrom_db1=new getFromDB();
                    $db1=new DB();
                    $finalArr1=$db1-> search_comments($link,$getFrom_db1,$info);

                    for($i=0;$i<sizeof($finalArr1);$i++)
                      {
                        
                        if($finalArr1[$i]['comment']!=null)
                          {?>
                          <?php echo date('d-m-Y',$finalArr1[$i]['storing_comment_time_date']).": ".$finalArr1[$i]['comment'];?>
                           <?php if($finalArr1[$i]['storing_comment_time_date']!=null){?>
                           <a  style="font-size:17px;" href="#" onclick="delete_info('<?php echo $finalArr1[$i]['number'];?>','','<?php echo $finalArr1[$i]['storing_comment_time_date'];?>','')">delete</a>
           
                          <?php
                          }
                        }?>
                        <br></br>
                        
                      <?php }?>
                    </td>

        <!--==================================================================================-->
                  <td> 
                      <a   style="font-size:17px"href="#" onclick="show_edit('add_last_donation_dates')">Add date</a>
                      <div style=" display:none" id="add_last_donation_dates"class="form-group form-group-lg">
                            <label style="font-size:20px" for="exampleInputtEXT1">New donation date: </label>
                            <input style="width:350px" type="text"  class="form-control"  id="add_last_donation_dates_input"  placeholder="dd/mm/yy">
                               <button type="button" class="btn btn-default" onclick="editd('add_last_donation_dates','add_last_donation_dates_input','<?php echo $finalArr[0]['number']?>','','','<?php echo $finalArr[0]['gender']?>')">Save</button>
                         
                             </div>  
                             <br></br>
                    
                    <?php
                    $getFrom_db2=new getFromDB();
                    $db2=new DB();
                    $finalArr2=$db2-> search_dates($link,$getFrom_db2,$info);

                      for($i=0;$i<sizeof($finalArr2);$i++){?> 
                        <?php if($finalArr2[$i]['last_donation_date']!=null){?>
                         <?php echo date('d-m-Y',$finalArr2[$i]['last_donation_date']);?>
                          <a  style="font-size:17px;" href="#" onclick="delete_info('<?php echo $finalArr2[$i]['number'];?>','<?php echo $finalArr2[$i]['last_donation_date'];?>','','<?php echo $finalArr[0]['gender']?>')">delete</a>
           
                  <?php }
                  ?>
                  <br></br>
                  <?php
                }?>

                </td>
  <!--==================================================================================-->
                  <td>
                   <?php 
                   if($finalArr[0]['available']){
                   echo date('d-m-Y',$finalArr[0]['available']);
                 }
                 else{
                  echo "non";
                 }?>
                    </div></td>


            
            
        <!--==================================================================================-->
                  <td>
                   <?php 
                   if($finalArr[0]['gender']){
                   echo $finalArr[0]['gender'];
                 }
                 else{
                  echo "non";
                 }?>
                  <a   style="font-size:17px;"href="#" onclick="show_edit('blood_type')">Edit</a>

                    <div style=" display:none" id="blood_type"class="form-group form-group-lg">
                    <label style="font-size:20px" for="exampleInputtEXT1">New gender: </label>
                      <input style="width:350px" type="text"  class="form-control"  id="gender_input"  placeholder="text">
                      <button type="button" class="btn btn-default" onclick="editd('gender','gender_input','<?php echo $finalArr[0]['number']?>','','','')">Save</button>
                    </div></td>


            
        <!--==================================================================================-->
                  <td>
                   <?php 
                   if($finalArr[0]['blood_type']){
                   echo $finalArr[0]['blood_type'];
                 }
                 else{
                  echo "non";
                 }?>
                  <a   style="font-size:17px;"href="#" onclick="show_edit('blood_type')">Edit</a>

                    <div style=" display:none" id="blood_type"class="form-group form-group-lg">
                    <label style="font-size:20px" for="exampleInputtEXT1">New blood type: </label>
                      <input style="width:350px" type="text"  class="form-control"  id="blood_type_input"  placeholder="text">
                      <button type="button" class="btn btn-default" onclick="editd('blood_type','blood_type_input','<?php echo $finalArr[0]['number']?>','','','')">Save</button>
                    </div></td>


           <!--==================================================================================-->


                  <td><?php echo $finalArr[0]['number'];?>
                     <a style="font-size:17px" href="#" onclick="show_edit('number')">Edit</a>

                     <div style=" display:none" id="number"class="form-group form-group-lg">
                    <label style="font-size:20px" for="exampleInputtEXT1">New number: </label>
                      <input style="width:350px" type="text"  class="form-control"  id="number_input"  placeholder="text">
                      <button type="button" class="btn btn-default" onclick="editd('number','number_input','<?php echo $finalArr[0]['number']?>','','','')">Save</button>
                      </div>    
                   </td>

         <!--==================================================================================-->

                  <td><?php echo $finalArr[0]['name'];?>
                     <a  style="font-size:17px" href="#" onclick="show_edit('name')">Edit</a>

                    <div style=" display:none" id="name"class="form-group form-group-lg">
                    <label style="font-size:20px" for="exampleInputtEXT1">New name: </label>
                      <input style="width:350px" type="text"  class="form-control"  id="name_input"  placeholder="text">
                      <button type="button" class="btn btn-default" onclick="editd('name','name_input','<?php echo $finalArr[0]['number']?>','','','')">Save</button>
                    </div>
                   </td>
                </tr>
           <!--==================================================================================-->

              </tbody>
            </table>
          </div>

<!--*************************************************************************************************************************-->

<!--*************************************************************************************************************************-->
 <!--****************************delete***********************************************************-->

<div style="margin-left:60%;width:150px;height:80px; position: absolute;top: 80px;"class="btn-group-vertical" role="group" aria-label="...">

    <button style="background:#009688;color:white;width:150px;"type="button" class="btn btn-default"onclick="delete_donator('<?php echo $finalArr[0]['number']?>')" >Delete donator</button>

</div>
 <!--*************************************************************************************-->
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

function delete_info(number,last_donation_date,storing_comment_time_date,gender)
{
$.ajax({
        
        url:'../php/delete_date.php',
        
        type:'post',
      
    data: {

        number:number,
        last_donation_date:last_donation_date,
        storing_comment_time_date:storing_comment_time_date,
        gender:gender
    
          },
    
        
        success:function(data1){
          
              var response=jQuery.parseJSON(data1);
             // alert(data1);
             // location.reload();
             if(response.data=="Deleted")
             {
              alert("Deleted");
              }
              else
              {
                alert("Error has occured");
              }
             location.reload();
              
        }
      
      
    });
}


function delete_donator(number)
{
$.ajax({
        
        url:'../php/delete_donator.php',
        
        type:'post',
      
    data: {

        number:number
    
          },
    
        
        success:function(data1){
          
             // var response=jQuery.parseJSON(data1.substring(0,(data1.length-1)));
             //alert(data1);
             var response=jQuery.parseJSON(data1);
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

$('#add_last_donation_dates_input').datepicker({
    dateFormat:'dd/mm/yy',
    showAnim:'show'
 });

$('#last_donation_dates_input').datepicker({
    dateFormat:'dd/mm/yy',
    showAnim:'show'
 });
</script>
  <script src="../js/jq.js"></script> <!-- bgeb l jquery-->
  <script src="../js/logout.js"></script>
  <script src="../js/search.js"></script>
  <script src="../js/edit_our_data.js"></script>
 



</body>
</html>