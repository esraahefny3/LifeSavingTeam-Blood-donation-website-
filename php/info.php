<html>
<head>
<!-- ******************************************7gat l bootstrap****************************************************************-->
<link rel="stylesheet" href="../css/navbar.css">


<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Latest compiled and minified JavaScript -->
       <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled and minified JavaScript -->

</head>

<body>

	
<!--**********************************************************************************************************************-->


<?php
require_once'check_in.php';
require_once 'db.php';


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
}?>
<!-- **************************************************NAV****************************************************************-->

<nav  id="navbar"class="navbar navbar-default ">
      <div id="search">
      <form action=""method="GET"class="navbar-form navbar-left" role="search">
        <div  class="form-group" >
         
           <input type="text" class="form-control" placeholder="search" onkeyup="search(this.value)">
         <!--*****************dropdown-menu***************************-->
          <ul id="l"class="dropdown-menu">
           
          </ul>
    <!--***********************************************************-->
        </div>
       </form>
</div>
      <ul id="l"class="nav navbar-nav">
      <li><a  href="./home.php?more=0">All donators</a></li>
        <li><a href="<?php echo './profile.php?user_id='.$member_id;?>">Profile</a></li>
        
        <li><a href="<?php echo './members_list.php';?>"><span class="glyphicon glyphicon-globe"></span> Users </a></li>
         <li><a onclick="logout()" href=""><span class="glyphicon glyphicon-new-window"></span> logout </a></li>
      </ul>
   
</nav>
<!--*************************************************************************************************************************-->

<ul  style="margin-left:50px;width:400px;border-color: #ff0000 #ff0000;"class="list-group">
  <div class="panel panel-success">
<?php

 $getFrom_db=new getFromDB();
$db=new DB();
$json=$db->get_Profile_info($link,$getFrom_db,$user_id);
$arr = json_decode($json, true);// kda 7ttha f array 


	   foreach ($arr as $key => $value) {
	   	if(($key=="member_id")||($key=="password"))
	   	{

	   	}
	   	else
	   	{
	   		$element=$value;
	   		$elementk=$key;
	   	# code...
	   



if($myProfile==1){?>
<!--
<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default" name='<?php //echo $elementk;?>' onclick="edit(this.name)">Edit</button>
</div>
-->
<?php }?>
<!-- *******************************************************************************************************************
<div style="width:500px;height:20px;background:#009688;"class="well"id="<?php //echo $elementk.'data';?>">
-->
	 
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $elementk;?></h3>
  </div>
  <div class="panel-body">
   <li id="<?php echo $elementk.'data';?>"class="list-group-item"> <?php echo $element;?>
<?php if($myProfile==1){?>
    <br></br><a  style="padding-left:310px;"name='<?php echo $elementk;?>' href="#" onclick="edit(this.name)">Edit</a>
<?php }?>
</li>
</div>
 
  

<!-- *******************************************************************************************************************-->
<div style=" display:none" id="<?php echo $elementk;?>"class="form-group form-group-lg">
    <label style="font-size:20px" for="exampleInputtEXT1">new First name : </label>
    <input style="width:500px" type="text"  class="form-control"  id="<?php echo $elementk.'input';?>"  placeholder="text">
    <button type="button" class="btn btn-default" onclick="edit_completee_personal_info('<?php echo $elementk;?>','<?php echo $elementk.'input'?>')">done</button>
   
   <!-- <button type="button" class="btn btn-default" onclick="edit_complete_personal_info('first_name_view','first_name_edit_box','first_name_input','first_name')">done</button>
    -->
    </div>
<!--***************************************************************************************-->
<?php
}
}
?>
</div>
</ul>
<!--****************************add as family***********************************************************-->

<div style="margin-left:85%;width:100px;height:80px; position: absolute;top: 80px;"class="btn-group-vertical" role="group" aria-label="...">

    <button style="background:#009688;color:white;"type="button" class="btn btn-default"onclick="add_as_family_member('<?php echo $user_id;?>')" >family</button>

</div>

<!-- *******************************************************************************************************************-->
<div style=" display:none" id="family_member"class="form-group form-group-lg">
    <label style="font-size:20px" for="exampleInputtEXT1">relation : </label>
    <input style="width:500px" type="text"  class="form-control"  id="family_input"  placeholder="text">
    <button type="button" class="btn btn-default" onclick="add_family_member_in_db('<?php echo $elementk;?>','<?php echo $elementk.'input'?>')">done</button>
   
   <!-- <button type="button" class="btn btn-default" onclick="edit_complete_personal_info('first_name_view','first_name_edit_box','first_name_input','first_name')">done</button>
    -->
    </div>
<!--***************************************************************************************-->



<!--***************************************************js*******************************************************************-->


<script src="../js/jq.js"></script> <!-- bgeb l jquery-->
	<script src="../js/edit.js"></script>
	<script src="../js/logout.js"></script>
	 <script src="../js/search.js"></script>
	<script src="../js/edit_completee_personal_info.js"></script>
	 <script src="../js/bootstrap.min.js"></script>

</body>
</html>