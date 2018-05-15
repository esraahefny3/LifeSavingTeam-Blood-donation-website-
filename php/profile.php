<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>



<!-- **************************************************title*****************************************************************-->
<title> linkMe</title>
<!-- **************************************************db*****************************************************************-->
<?php
header("Content-Type: text/html; charset=utf-8");
require_once'check_in.php';

require_once'db.php';


$member_id=$_COOKIE['member_id'];
$myProfile=0;
$user_id=$_COOKIE['member_id'];
if(!empty($_GET))
{
$user_id=$_GET['user_id'];
}
if($user_id==$_COOKIE['member_id'])
{
$myProfile=1;
}
?>

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

    <style type="text/css">

      .btn-file {
          position: relative;
          overflow: hidden;
      }
      .btn-file input[type=file] {
          position: absolute;
          top: 0;
          right: 0;
          min-width: 100%;
          min-height: 100%;
          font-size: 100px;
          text-align: right;
          filter: alpha(opacity=0);
          opacity: 0;
          outline: none;
          background: white;
          cursor: inherit;
          display: block;
      }
    </style>

</head>

<!-- **************************************************js*****************************************************************-->
<body>
	
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
   
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo './profile.php?user_id='.$member_id;?>">Profile<span class="sr-only">(current)</span></a></li>
          </ul>
          
        </div>

   <!--*********************************************************************************************************-->
  


<!--*************************************UPLOAD PIC**************************************************-->
<?php 
$getFrom_db4=new getFromDB();
$db4=new DB();
$finalArr4=$db4->get_profile_info2($link,$getFrom_db4,$user_id);//hya rg3a k assoc array f hst5dmha kda 

?>
<form action="pp.php" method="post" enctype="multipart/form-data">
<!-- ageb l sora lw mwgoda lw la ageb l defult 3la 7asab l gender!-->
<?php 
$getFrom_db=new getFromDB();
$db=new DB();
$finalArr=$db->get_pp($link,$getFrom_db,$user_id);//hya rg3a k assoc array f hst5dmha kda 

if($finalArr['profile_pic']=="NULL")//defult pics 
{
?>
      <?php 
    $sql = "SELECT gender FROM member WHERE member_id = '$user_id'";
    $result = $link->query($sql);

    //if ($result->num_rows > 0) {
      //  while($row = $result->fetch_assoc()) {
    if($result)
      {
          $row = $result->fetch_assoc();
          if($row['gender'] =='female')
          {
           ?>
          <!--*********************************************************************************************************-->
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           <h1 class="page-header"><?php echo $finalArr4['first_name']." ".$finalArr4['last_name']?></h1>
           <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="..\css\photos\female.png" width="250" height="250"  alt="Generic placeholder thumbnail">
               <h4>Label</h4>
               <div><span  style="font-size:15px;"class="text-muted">Hii</span></div>
              
            </div>
          </div>
          <!--*********************************************************************************************************-->
    <?php }
        else if($row['gender'] =='male')
        {
         ?>
   <!--*********************************************************************************************************-->
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $finalArr4['first_name']." ".$finalArr4['last_name']?></h1>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="..\css\photos\male.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <div><span  style="font-size:15px;"class="text-muted">Hii</span></div>
              
            </div>
          </div>
    <!--*********************************************************************************************************-->
    <?php 
        }

    }else
    {
      mysqli_error($link);
    }
}
else//have pp
{?>
  <!--*********************************************************************************************************-->
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $finalArr4['first_name']." ".$finalArr4['last_name']?></h1>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
             <img src="../css/pp/<?php echo $finalArr['profile_pic'];?>" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
               <div><span  style="font-size:15px;"class="text-muted">Hii</span></div>
              
            </div>
          </div>
    <!--*********************************************************************************************************-->
  
<?php
}
?>
<?php 
if($myProfile==1)
  {?>

<span class="btn btn-default btn-file">
    Choose photo <input type="file" name="profilepic"id="profilepic"/> 
</span>


     <input type="submit" name="uploadpic"class="btn btn-default" value="Upload Image" />

  <button  type="button" class="btn btn-default"onclick="remove_pp('<?php echo $user_id;?>')">remove pic</button>
  
<?php
}?>
</form>

<!--*************************************excel upload form **************************************************-->
<br></br>
<div class="btn-group-vertical" role="group" aria-label="...">
<?php if($myProfile==1){?>
<form  method="POST" enctype="multipart/form-data">

<span class="btn btn-default btn-file">
    Choose file<input type="file"name="choose_sheet" ></input>
</span>
  <input type="submit"class="btn btn-default"name="show_sheet"value="Show data"></input>
  <input type="submit"class="btn btn-default"name="submit_sheet"value="Save"></input>
</form>
<?php }?>

</div>
<!--*************************************excel upload**************************************************-->


<?php

if(isset($_POST["submit_sheet"]))
  {
    if(!empty($_FILES["choose_sheet"]["tmp_name"]))
    {
          //--------------
           $name=$_FILES['choose_sheet']['name'];
           $type=explode(".",$name);//by2sm mn 3and l "."
           //echo $type[1];
           if($type[1]=="csv")
           {
             $temp=$_FILES['choose_sheet']['tmp_name'];
             $open=fopen($temp,"r");
             $getFrom_db4=new getFromDB();
             $db4=new DB();
             $k=0;?>
         <h2 class="sub-header">Informations:</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>التبرع القادم</th>
                  <th>الحالة</th>
                  <th>الرقم</th>
                  <th>الاسم</th>
                </tr>
              </thead>
              <tbody>

               <?php  
             while($data=fgetcsv($open,5000,","))
             {
              $k++;
              //$datan=array();
              for($i=0;$i<5;$i++)
               {
                if($data[$i]==null)
                {
                   if($i==4)//gender
                  {
                  //echo "string";
                      $data[4]='male';
                  }
                  else
                  {
                 $data[$i]=null;
                 }

                }
               
               }
           $data[3] = str_replace('/', '-', $data[3]);     
           $data[3]=strtotime($data[3]);



           
           //$datan[4] = str_replace('/', '-', $datan[4]);     
           //$datan[4]=strtotime($datan[4]);

           
              //echo var_dump($datan);
            if($k>1)
             {
              try{
             $finalArr4=$db4->insert_excel_row($link,$getFrom_db4,$data[0],$data[1],$data[2],$data[3],$data[4]);//hya rg3a k assoc array f hst5dmha kda 
              $finalArr4=json_decode($finalArr4, true);
                    
           if(($finalArr4['data']!='This donator is already exist!')&&($finalArr4['data']!='Error has occured'))
            {
             
             // $datan[5] = str_replace('/', '-', $data[5]);     
             // $datan[5]=strtotime($data[5],'+85 days');

             $finalArr5=$db4->insert_excel_available($link,$getFrom_db4,$data[1],$data[4]);//hya rg3a k assoc array f hst5dmha kda 
               $finalArr5=json_decode($finalArr5, true);
              
            }   

          //  echo "<br>";
            // 
            // var_dump(json_decode($finalArr4, true));
            // echo $finalArr4;
?>
             <tr>
                   <td>
              <?php
              if($finalArr5['data']!='Error has occured')
               {
                echo date('d-m-Y',intval($finalArr5['data']));
                }
                else
                {
                  echo 'Error has occured!';
                }
                     
               ?>


                   </td>
                   <td>
                    <?php 
                     echo $finalArr4['data'];
              
                       ?>
                   </td>

                   <td>
                     <?php echo $data[1];?>
                    
                   </td>

                   <td>
                     <?php echo $data[0];?>
                    
                   </td>
             </tr>
                    

               <?php }
                 catch(Exception $n)
                 {      
                   // echo "kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk";
                 }


             }
              
             }
             ?>
               
           
              </tbody>
            </table>
          </div> 
            
        <?php  }
    }
  }
?>





<?php

if(isset($_POST["show_sheet"]))
  {
    if(!empty($_FILES["choose_sheet"]["tmp_name"]))
    {
            $name=$_FILES['choose_sheet']['name'];
           $type=explode(".",$name);//by2sm mn 3and l "."
           //echo $type[1];
           if($type[1]=="csv")
           {
             $temp=$_FILES['choose_sheet']['tmp_name'];
             $open=fopen($temp,"r");
             $getFrom_db4=new getFromDB();
             $db4=new DB();
             $k=0;
             ?>
         <h2 class="sub-header">Informations:</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>النوع</th>
                  <th>مواعيد التبرع</th>
                  <th>الفصيلة</th>
                  <th>الرقم</th>
                  <th>الاسم</th>
                </tr>
              </thead>
              <tbody>
                
             <?php
             
             while($data=fgetcsv($open,500,","))
             {
              $k++;
              //$datan=array();
               for($i=0;$i<5;$i++)
               {
                if($data[$i]==null)
                {
                   if($i==4)//gender
                  {
                  //echo "string";
                      $data[4]='male';
                  }
                  else
                  {
                 $data[$i]=null;
                 }

                }
               
               }
           $data[3] = str_replace('/', '-', $data[3]);           
           $data[3]=strtotime($data[3]);

           
             ?>
                   <tr>
                    <td> 
                   <?php echo $data[4];?>
                   </td>

                   <td> 
                   <?php echo date('d-m-Y',$data[3]);?>
                   </td>

                   <td>
                    <?php 
                       if($data[2]){
                       echo $data[2];
                      }
                       ?>
                   </td>

                   <td>
                     <?php echo $data[1];?>
                    
                   </td>

                   <td>
                     <?php echo $data[0];?>
                    
                   </td>
                    </tr>
                    <?php
             } ?>
               
           
              </tbody>
            </table>
          </div>


                           
                    
           
            
         <?php }
    }
  }
?>


<!--*************************************js **************************************************-->




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


<script type="text/javascript">
function info(user_id)
{ 

          window.location.href ='./info.php?user_id='.concat(user_id);
 
}

function resize()
{
 // auto resize text area==>http://stephanwagner.me/auto-resizing-textarea
  jQuery.each(jQuery('textarea[data-autoresize]'), function() {
    var offset = this.offsetHeight - this.clientHeight;
 
    var resizeTextarea = function(el) {
        jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
    };
    jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
});
}

</script>

<!--*************************************************************************************************************************-->
  <script src="../js/jq.js"></script> <!-- bgeb l jquery-->
  <script src="../js/edit.js"></script>
  <script src="../js/remove_pp.js"></script>
  
  <script src="../js/logout.js"></script>
  <script src="../js/edit_complete_personal_info.js"></script>
   <script src="../js/search.js"></script>
  

<!--******************************js of submitting pic*******************************************************************************************-->

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