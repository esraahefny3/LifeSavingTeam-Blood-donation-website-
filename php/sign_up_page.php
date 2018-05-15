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

     <link href="../css/carousel.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/bootstrap/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
   
  </head>


    <!-- Carousel
    ================================================== -->
    <div style="height:200px;margin-left:3px;margin-right:6px;"id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      </ol>
      <div style="height:200px;margin-left:3px;margin-right:6px;"class="carousel-inner" role="listbox">
        <div class="item active">
           <img style="height:200px;"src="../css/photos/index3.png" alt="Chania">
        
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

<label id="register" style="font-size:30px;" >Register</label>
    
    <!--
    <p id='again_error'></p>
  -->



<div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">

         <div style="margin:20px" class="form-group form-group-lg">
            <input  type="text"  class="form-control"  name="first_name" id="first_name" placeholder="First name"onkeyup="on_press_register(this.value,this.name)"><p id='first_name_error'></p>
            <p style="color:red;"id='first_name_error'></p>
      </div>

       <div style="margin:20px" class="form-group form-group-lg">
            <input  type="text"  class="form-control"  name="last_name" id="last_name" placeholder="Last name"onkeyup="on_press_register(this.value,this.name)">
        </div>

       <div style="margin:20px" class="form-group form-group-lg">
            <input  type="text"  class="form-control"  name="phone_number" id="phone_number" placeholder="Phone number"onkeyup="on_press_register(this.value,this.name)">
       </div>

        <div style="margin:20px" class="form-group form-group-lg">
            <input type="text"  class="form-control"  name="gender" id="gender" placeholder="Gender"onkeyup="on_press_register(this.value,this.name)"><p id='gender_error'></p>
            <p id='gender_error'></p>
    </div>
                 



    </div><!-- /.col-lg-4 -->
<!-- *******************************************************************************************************************-->
    
        
        <div class="col-lg-4">
          <div style="margin:20px" class="form-group form-group-lg">
            <input  type="email" class="form-control"  name="email" id="email" placeholder="Email"onkeyup="on_press_register(this.value,this.name)"><p id='email_error'></p>
            <p id='email_error'></p>
        </div>
    
          <div style="margin:20px" class="form-group form-group-lg">
            <input type="password" class="form-control" name="password" id="password"placeholder="Password"onkeyup="on_press_register(this.value,this.name)"><p id='password_error'></p>
            <p id='password_error'></p>
         </div>

         <div style="margin:20px" class="form-group form-group-lg">
            <input type="text"  class="form-control"  name="birth_date" id="birth_date" placeholder="Birth date"onkeyup="on_press_register(this.value,this.name)">
          </div>

        <div style="margin:20px" class="form-group form-group-lg">
         <input  type="text"  class="form-control"  name="about_me" id="about_me" placeholder="About Me"onkeyup="on_press_register(this.value,this.name)">
        </div>
    

 <!-- *******************************************************************************************************************-->

        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
            <button  style="width:200px;"id="register_btn" type="button" class="btn btn-default"onclick="register()">register</button>
            <br></br>
            <button style="width:200px;"id="log_in_btn" type="button" class="btn btn-default"onclick="go_login()">login</button>
        
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
    <script src="../js/jq.js"></script> <!-- bgeb l jquery-->
    <script src="../js/on_press_register.js"></script>
     <script src="../js/register.js"></script>
   
   <script type="text/javascript">

        function go_login()
        {

            window.location.replace("../index.php");
        }
   </script>
<!--
  </body>
</html>
