
        <?php
        include("admincb/config/config.php");
        if(isset($_GET['quanly'])){
            $tam=$_GET['quanly'];
        }else{
            $tam='';
        }
        if($tam=='theodoiem'){
include("include/main/theodoiem.php");
        }
else if($tam=='theodoi'){
    include("include/main/theodoi.php");
}
        ?>
        
    
    <?php
     include("admincb/config/config.php");
        if(isset($_GET['quanly'])){
            $tam=$_GET['quanly'];
        }else{
            $tam='';
        }
        if($tam=='theodoict'){
include("include/main/theodoict.php");

        }
        else if($tam=='theodoiemct'){
            include("include/main/theodoiemct.php");
        }

        ?>
        <?php 
        include("include/right/right.php");
        ?>