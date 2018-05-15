
<html>
<head>
<!-- ******************************************7gat l bootstrap****************************************************************-->
 <meta charset="utf-8">
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

<?php
header("Content-Type: text/html; charset=utf-8");
session_start();
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
 <!--=====================================================Delete button==================================================-->
        <div style="margin-left:65%;width:150px;height:80px; position: absolute;top: 80px;"class="btn-group-vertical" role="group" aria-label="...">

         <button type="button" class="btn btn-default"onclick="delete_donators()" >Delete donator</button>
        </div>

<!--=====================================================export to csv file FORM ==================================================-->

         <div style="margin-left:50%;width:150px;height:80px; position: absolute;top: 80px;"class="btn-group-vertical" role="group" aria-label="...">
          <form  method="POST" >

            <input type="submit"class="btn btn-default"name="export_sheet"value="Export to excel sheet"></input>
          </form>     

        </div>

    </nav>
<!--*************************************************************************************************************************-->
<?php

require'check_in.php';

require'db.php';
require 'show_donators_function.php';

$info=$_SESSION['info'];
$getFrom_db=new getFromDB();
$db=new DB();
$finalArr=$db-> search($link,$getFrom_db,$info);//hya rg3a k assoc array f hst5dmha kda 

show($link,$_GET['more'],$finalArr);
//if((sizeof($finalArr)>0)&&(sizeof($finalArr)>$_GET['more'])){

if(sizeof($finalArr)>30){?>
?>
<a  style="padding-left:310px;" href="../php/see_more.php?more=<?php echo ($_GET['more']+20);?>">See more..</a>
<br></br>
<?php }


?>
 <!--=====================================================export to csv file==================================================-->

<?php

if(isset($_POST["export_sheet"]))
  {
    $data="";
    //------------------------->ghz l data 
   
     
        $which2="donators";
        $finalArr2=$db->get_all($link,$getFrom_db,$which2);//hya rg3a k assoc array f hst5dmha kda 
        if(sizeof($finalArr2)>0)
        {$data.="الاسم".","."الرقم".","."الفصيلة".","."اخر معاد تبرع".","."النوع"."\n";//l asm  l rakam  l fasela ....
         for($i=0;$i<sizeof($finalArr2);$i++)
         {
          $data.=$finalArr2[$i]["name"].",";
          $data.=$finalArr2[$i]["number"].",";
          $data.=$finalArr2[$i]["blood_type"].",";
          $data.=$finalArr2[$i]["last_donation_date"].",";
          $data.=$finalArr2[$i]["gender"];
          $data.="\n"; //we cannot w
         }


        }
        else
        {

        }

        
   
    if($data!='')
         {
          $file="../csv/".strtotime('now').".csv";//b3ml asm ll file aly h export fih /asm l file aly hynzl
          $openFile=fopen($file, "w"); //fopen(filename, mode) //bft l file 34an aktb fih
          fputs($openFile,$data);//b7ot l data f .csv file fl mkan aly 3mlto
         ?>
            <script type="text/javascript">
            //de jquery ll download 3la tool 
            window.location.href = '<?php echo $file;?>';
            </script>
     <?php }

 }
?>




<!--*************************************************************************************************************************-->
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
function delete_donator(number)
{
$.ajax({
        
        url:'../php/delete_donator.php',
        
        type:'post',
      
    data: {

        number:number
    
          },
    
        
        success:function(data1){
          
            //  var response=jQuery.parseJSON(data1.substring(0,(data1.length-1)));
            var response=jQuery.parseJSON(data1);
             // location.reload();
             alert(response.data);
             location.reload();
            
              
        }
      
      
    });
}

function delete_donator_1(numbers)
{
$.ajax({
        
        url:'../php/delete_donators.php',
        
        type:'post',
      
    data: {

        numbers:numbers
    
          },
    
        
        success:function(data1){
          
            //  var response=jQuery.parseJSON(data1.substring(0,(data1.length-1)));
            var response=jQuery.parseJSON(data1);
             // location.reload();
             alert(response.data);
             location.reload();
            
              
        }
      
      
    });
}

function delete_donators()
{

  var result=$('input[type="checkbox"]:checked');
  if(result.length>0)
  {
    var array=[];
    result.each(function()
    {
      array.push($(this).val());

    });

    if(array!=null)
    {
      delete_donator_1(array);
    }

  }
   else
    {
      alert("No data selectd");
    }
}
</script>

  <script src="../js/jq.js"></script> <!-- bgeb l jquery-->
  <script src="../js/logout.js"></script>
   <script src="../js/search.js"></script>
 



</body>
</html>