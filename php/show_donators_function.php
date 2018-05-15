
<?php

function show($link,$num,$finalArr){//numbers of donators +
//session_start();

if(sizeof($finalArr)<30){?>
     <h2 class="sub-header">Informations:</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                   <th>select</th>
                   <th>الفصيلة</th>
                  <th>الرقم</th>
                  <th>الاسم</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($j=0;$j<sizeof($finalArr);$j++) {?>
                <tr>
                  <td>
                     <label><input style="padding-right:50px !important;"type="checkbox" value="<?php echo $finalArr[$j]['number'];?>"></label><!-- value to change-->
                  </td>
                 
                  <?php if( $finalArr[$j]['blood_type']!=null){?>
                    <td><a ><?php echo $finalArr[$j]['blood_type'];?></a></td>
                  <?php }
                  else {?>
                    <td> </td>
                  <?php }?>
                  <td> <a ><?php echo $finalArr[$j]['number'];?></a> </td>
                  <td> <a  href="../php/see_donator.php?num=<?php echo $finalArr[$j]['number'];?>" ><?php echo $finalArr[$j]['name'];?></a></td>
                  <td><?php echo $j+1;?></td>
                </tr>
            <?php }?> 
              </tbody>
            </table>
          </div>

<!--*********************************************************************************************************-->

<?php


}else if(sizeof($finalArr)>30){?>


<h2 class="sub-header">Informations:</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>select</th>
                  
                  <th>الفصيلة</th>
                  <th>الرقم</th>
                  <th>الاسم</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
              <?php for ($j=0;$j<30+$num;$j++) {
                if($j<sizeof($finalArr)){
                ?>

                <tr>
                     <td>
                     <label><input style="padding-right:50px !important;"type="checkbox" value="<?php echo $finalArr[$j]['number'];?>"></label><!-- value to change-->
                  </td>
                 
                  <?php if( $finalArr[$j]['blood_type']!=null){?>
                    <td><a ><?php echo $finalArr[$j]['blood_type'];?></a></td>
                  <?php }
                  else {?>
                    <td> </td>
                  <?php }?>
                  <td> <a ><?php echo $finalArr[$j]['number'];?></a> </td>
                  <td> <a  href="../php/see_donator.php?num=<?php echo $finalArr[$j]['number'];?>" ><?php echo $finalArr[$j]['name'];?></a></td>
                  <td><?php echo $j+1;?></td>
                </tr>
            
            
<?php 
}else{
  break;
}
}?>
              </tbody>
            </table>
          </div>

<?php }
}
?>
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
         // alert(data1);
          
              //var response=jQuery.parseJSON(data1.substring(0,(data1.length-1)));
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
             location.reload();
            
              
        }
      
      
    });
}
</script>
