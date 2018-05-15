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
<?php
$member_id=$_COOKIE['member_id'];
?>
	<!-- **************************************************NAV****************************************************************-->

<nav  id="navbar"class="navbar navbar-default ">
      <div id="search">
      <form action=""method="GET"class="navbar-form navbar-left" role="search">
        <div  class="form-group">
          <input type="text" class="form-control" placeholder="Search" onkeyup="search(this.value)">
     <!--*****************dropdown-menu***************************-->
          <ul id="l"class="dropdown-menu">
            <!--
        <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
        <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
        <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="i"></i> Make admin</a></li>
      -->
          </ul>
    <!--***********************************************************-->
        </div>
        <button id="btn"type="submit" class="btn btn-default"><span class="glyphicon glyphicon-send"></span></button>
      </form>
</div>
      <ul id="l"class="nav navbar-nav">
       <li><a  href="./home?more=0.php">All donators</a></li>
        <li><a href="<?php echo './profile.php?user_id='.$member_id;?>">Profile</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Friends</a> </li>
        <li><a href="<?php echo './members_list.php';?>"><span class="glyphicon glyphicon-globe"></span> Users </a></li>
          <li><a onclick="logout()" href=""><span class="glyphicon glyphicon-new-window"></span> logout </a></li>
      </ul>
   
</nav>

 <script src="../js/bootstrap.min.js"></script>
</body>

	<!-- *****************************************************************************************************************-->