<?php
include("../../config/config.php");
$tenloaitd = $_POST['tendanhmuc'];
$thutu =$_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    
    $sql_them = "INSERT INTO tbl_danhmuctd(tendanhmuctd,thutu) VALUES('".$tenloaitd."','".$thutu."')" ;
    mysqli_query($mysqli,$sql_them);
    header("Location:../../index.php?action=quanlidanhmuctheodoi&query=them");
}else if(isset($_POST['suadanhmuc'])){
    
        $sql_sua = "UPDATE tbl_danhmuctd SET tendanhmuctd='".$tenloaitd."',thutu='".$thutu."' WHERE id_danhmuctd='$_GET[iddanhmuc]' " ;
    mysqli_query($mysqli,$sql_sua);
    header("Location:../../index.php?action=quanlidanhmuctheodoi&query=them");
}else{
    $id=$_GET['iddanhmuc'];
$sql_xoa="DELETE FROM tbl_danhmuctd WHERE id_danhmuctd='".$id."'";
mysqli_query($mysqli,$sql_xoa);
header("Location:../../index.php?action=quanlidanhmuctheodoi&query=them");
}
