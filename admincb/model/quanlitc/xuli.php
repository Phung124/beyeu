<?php
include("../../config/config.php");
$tentiemchung = $_POST['tentiemchung'];
$thang =$_POST['thang'];
$lichtiem =$_POST['lichtiem'];
$mota =$_POST['mota'];
$laylang=$_POST['laylang'];
if(isset($_POST['tiemchung'])){
    
    $sql_them = "INSERT INTO tbl_tiemchung(tentiemchung,thang,lichtiem,mota,laylang) VALUES('".$tentiemchung."','".$thang."','".$lichtiem."','".$mota."','".$laylang."')" ;
    mysqli_query($mysqli,$sql_them);
    
    header("Location:../../index.php?action=quanlitiemchung&query=them");
}else if(isset($_POST['sualichtiem'])){
    
        $sql_sua = "UPDATE tbl_tiemchung SET tentiemchung='".$tentiemchung."',thang='".$thang."',lichtiem='".$lichtiem."',mota='".$mota."',tiemchung = '".$laylang."' WHERE id_tiemchung='$_GET[idtiemchung]' " ;
    mysqli_query($mysqli,$sql_sua);
    header("Location:../../index.php?action=quanlitiemchung&query=them");
}else{
    $id=$_GET['idtiemchung'];
$sql_xoa="DELETE FROM tbl_tiemchung WHERE id_tiemchung='".$id."'";
mysqli_query($mysqli,$sql_xoa);
header("Location:../../index.php?action=quanlitiemchung&query=them");
}
