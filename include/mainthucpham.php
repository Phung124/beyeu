<?php 
include("admincb/config/config.php");
        include("include/left/thucpham.php");
       
      
        ?>
         <?php 
             
             if(isset($_GET['quanly'])){
                 $tam=$_GET['quanly'];
             }else{
                 $tam='';
             }
             if($tam=='thucphamct'){
     include("include/main/thucphamct.php");
             }
     else if($tam=='thucpham'){
         include("include/main/thucpham.php");
     }
      
        ?>

  <?php 
          include("include/right/right.php");
       
      
        ?>