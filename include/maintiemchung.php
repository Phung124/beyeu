
<?php
        include("admincb/config/config.php");
        if(isset($_GET['quanly'])){
            $tam=$_GET['quanly'];
        }else{
            $tam='';
        }
        if($tam=='tiemchung'){
include("include/main/tiemchung.php");
        }
else if($tam=='tiemchungct'){
    include("include/main/tiemchungct.php");
}
        ?>
        
        <?php 
        include("include/right/right.php");
        ?>