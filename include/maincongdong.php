<?php
include("include/left/congdong.php");
?>
<?php 
             
if(isset($_GET['quanly'])){
    $tam=$_GET['quanly'];
}else{
    $tam='';
}
if($tam=='chude'){
include("include/main/chude.php");
}
else{
include("include/main/congdong.php");
}

?>
<?php 
include("include/right/right.php");
?>