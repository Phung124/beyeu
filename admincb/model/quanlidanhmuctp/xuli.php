<?php
include("../../config/config.php");
$tenloaitp = $_POST['tendanhmuc'];
$thutu =$_POST['thutu'];
$hinhanh = time().'_'.$hinhanh;
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);

if(isset($_POST['themdanhmuc'])){
    
    $sql_them = "INSERT INTO tbl_danhmuctp(tendanhmuctp,thutu,hinhanh) VALUES('".$tenloaitp."','".$thutu."','".$hinhanh."')" ;
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
    header("Location:../../index.php?action=quanlidanhmucthucpham&query=them");
}else if(isset($_POST['suadanhmuc'])){
    if($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
    $sql_sua = "UPDATE tbl_danhmuctp SET tendanhmuctp='".$tenloaitp."',thutu='".$thutu."',hinhanh='".$hinhanh."' WHERE id_danhmuctp='$_GET[iddanhmuc]' " ;
    $sql = "SELECT * FROM tbl_danhmuctp WHERE id_danhmuctp ='$_GET[iddanhmuc]' LIMIT  1 ";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
unlink('upload/'.$row['hinhanh']);
    }
}
    else{
        $sql_sua = "UPDATE tbl_danhmuctp SET tendanhmuctp='".$tenloaitp."',thutu='".$thutu."' WHERE id_danhmuctp='$_GET[iddanhmuc]' " ;
    }
    mysqli_query($mysqli,$sql_sua);
    header("Location:../../index.php?action=quanlidanhmucthucpham&query=them");
}else{
    $id=$_GET['iddanhmuc'];
    $sql = "SELECT * FROM tbl_danhmuctp WHERE id_danhmuctp ='$id' LIMIT  1 ";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
unlink('upload/'.$row['hinhanh']);
    }
$sql_xoa="DELETE FROM tbl_danhmuctp WHERE id_danhmuctp='".$id."'";
mysqli_query($mysqli,$sql_xoa);
header("Location:../../index.php?action=quanlidanhmucthucpham&query=them");
}